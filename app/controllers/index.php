<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

class Index extends PF_Controller {
    public function __construct() {
        parent::__construct ();
        $this->load->library ( 'wx_lib' );
        $this->load->model ( 'college_mdl' );
    }

    public function index() {
        $weObj  = $this->wx_lib->obj();
        $weObj->valid();
        $type   = $weObj->getRev()->getRevType();
        switch($type) {
        case Wechat::MSGTYPE_TEXT:
            $text = $weObj->getRevData();
            $text = $text['Content'];

            if(strlen($text) != 12){
                return $weObj->text("请输入四个汉字的支持")->reply();
            } 
            $arr = $this->get_url($text);

            $newsData = array(
                array(
                    'Title'=>'你的照片做好啦！',
                    'Description'=>'请为你的母校加油吧！',
                    'PicUrl'=>$arr['img_url'],
                    'Url'=>$arr['url']
                )
            );
            return $weObj->news($newsData)->reply();
            break;
        case Wechat::MSGTYPE_EVENT:
            break;
        case Wechat::MSGTYPE_IMAGE:
            break;
        default:
            $weObj->text("help info")->reply();
        }
    }

    public function get_url($text){
        $host   = 'http://exam.loiter.us';
        
        $college = $this->college_mdl->get_college_byname($text);
        if($college) {
            $url = $college->url;
            $college->num ++;
            $college->update_time = time(); 
            $this->college_mdl->set_college($college);
        }
        else {
            $data = $this->http_get('localhost:8808/?url='.$host.'/index/html?text='.$text);
            $data = json_decode($data);
            $url  = $data->image_url;
        
            $college = $this->college_mdl->gen_new_college();
            $college->name  = $text;
            $college->url   = $url;
            $this->college_mdl->set_college($college);
            $college->id    = $this->college_mdl->get_insert_id();
        }

        return array(
            'url'=>$host.'/index/share/'.$college->id,
            'img_url'=>$host."/public/".$url
        );
    }

    private function http_get($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        ob_start();
        curl_exec($ch);
        $result = ob_get_contents() ;
        ob_end_clean();
         
        return $result;
    }

    public function share($id){
        $host   = 'http://exam.loiter.us';
        $college= $this->college_mdl->get_college($id);
        $url    = $host."/public/".$college->url;
        
        $this->output_data(array(
            'url'=>$url,
            'create_time'=>$college->create_time
        ), 'share_img');
    }

    public function convert(){ 
        $text = $this->get('text');
 
        $this->output_data(array(
            'text'=>$text,
        ), 'convert');
    }
}
