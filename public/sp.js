var express = require('express'); 
var app = express()
    , uExtract = require('url-extract')();

app.get('/', function(req, res){ 
    var url = req.query.url + '&of=html';
    if (url) {
        uExtract.snapshot(url, {
            //image: './images/',
            viewportSize: {
              width: 300, 
              height: 300
            },
            //zoomFactor: 1.5,
            callback: function (job) {
                res.json({ image_url: job.image });
                res.end()
            }
        });
    }
}); 

app.listen('8808');
