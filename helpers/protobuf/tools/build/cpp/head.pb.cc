// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: head.proto

#define INTERNAL_SUPPRESS_PROTOBUF_FIELD_DEPRECATION
#include "head.pb.h"

#include <algorithm>

#include <google/protobuf/stubs/common.h>
#include <google/protobuf/stubs/once.h>
#include <google/protobuf/io/coded_stream.h>
#include <google/protobuf/wire_format_lite_inl.h>
#include <google/protobuf/descriptor.h>
#include <google/protobuf/generated_message_reflection.h>
#include <google/protobuf/reflection_ops.h>
#include <google/protobuf/wire_format.h>
// @@protoc_insertion_point(includes)

namespace ts {

namespace {

const ::google::protobuf::Descriptor* ServiceHead_descriptor_ = NULL;
const ::google::protobuf::internal::GeneratedMessageReflection*
  ServiceHead_reflection_ = NULL;

}  // namespace


void protobuf_AssignDesc_head_2eproto() {
  protobuf_AddDesc_head_2eproto();
  const ::google::protobuf::FileDescriptor* file =
    ::google::protobuf::DescriptorPool::generated_pool()->FindFileByName(
      "head.proto");
  GOOGLE_CHECK(file != NULL);
  ServiceHead_descriptor_ = file->message_type(0);
  static const int ServiceHead_offsets_[10] = {
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ServiceHead, req_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ServiceHead, cmdcode_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ServiceHead, subcmd_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ServiceHead, portalseq_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ServiceHead, trantime_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ServiceHead, resultcode_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ServiceHead, resultinfo_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ServiceHead, errorcode_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ServiceHead, errinfo_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ServiceHead, sessionid_),
  };
  ServiceHead_reflection_ =
    new ::google::protobuf::internal::GeneratedMessageReflection(
      ServiceHead_descriptor_,
      ServiceHead::default_instance_,
      ServiceHead_offsets_,
      GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ServiceHead, _has_bits_[0]),
      GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ServiceHead, _unknown_fields_),
      -1,
      ::google::protobuf::DescriptorPool::generated_pool(),
      ::google::protobuf::MessageFactory::generated_factory(),
      sizeof(ServiceHead));
}

namespace {

GOOGLE_PROTOBUF_DECLARE_ONCE(protobuf_AssignDescriptors_once_);
inline void protobuf_AssignDescriptorsOnce() {
  ::google::protobuf::GoogleOnceInit(&protobuf_AssignDescriptors_once_,
                 &protobuf_AssignDesc_head_2eproto);
}

void protobuf_RegisterTypes(const ::std::string&) {
  protobuf_AssignDescriptorsOnce();
  ::google::protobuf::MessageFactory::InternalRegisterGeneratedMessage(
    ServiceHead_descriptor_, &ServiceHead::default_instance());
}

}  // namespace

void protobuf_ShutdownFile_head_2eproto() {
  delete ServiceHead::default_instance_;
  delete ServiceHead_reflection_;
}

void protobuf_AddDesc_head_2eproto() {
  static bool already_here = false;
  if (already_here) return;
  already_here = true;
  GOOGLE_PROTOBUF_VERIFY_VERSION;

  ::google::protobuf::DescriptorPool::InternalAddGeneratedFile(
    "\n\nhead.proto\022\002ts\"\277\001\n\013ServiceHead\022\013\n\003req\030"
    "\001 \002(\t\022\017\n\007cmdcode\030\002 \002(\t\022\016\n\006subcmd\030\003 \001(\t\022\021"
    "\n\tportalseq\030\004 \001(\t\022\020\n\010trantime\030\005 \001(\t\022\022\n\nr"
    "esultcode\030\006 \001(\005\022\022\n\nresultinfo\030\007 \001(\t\022\021\n\te"
    "rrorcode\030\010 \001(\005\022\017\n\007errinfo\030\t \001(\t\022\021\n\tsessi"
    "onid\030\n \001(\r", 210);
  ::google::protobuf::MessageFactory::InternalRegisterGeneratedFile(
    "head.proto", &protobuf_RegisterTypes);
  ServiceHead::default_instance_ = new ServiceHead();
  ServiceHead::default_instance_->InitAsDefaultInstance();
  ::google::protobuf::internal::OnShutdown(&protobuf_ShutdownFile_head_2eproto);
}

// Force AddDescriptors() to be called at static initialization time.
struct StaticDescriptorInitializer_head_2eproto {
  StaticDescriptorInitializer_head_2eproto() {
    protobuf_AddDesc_head_2eproto();
  }
} static_descriptor_initializer_head_2eproto_;

// ===================================================================

#ifndef _MSC_VER
const int ServiceHead::kReqFieldNumber;
const int ServiceHead::kCmdcodeFieldNumber;
const int ServiceHead::kSubcmdFieldNumber;
const int ServiceHead::kPortalseqFieldNumber;
const int ServiceHead::kTrantimeFieldNumber;
const int ServiceHead::kResultcodeFieldNumber;
const int ServiceHead::kResultinfoFieldNumber;
const int ServiceHead::kErrorcodeFieldNumber;
const int ServiceHead::kErrinfoFieldNumber;
const int ServiceHead::kSessionidFieldNumber;
#endif  // !_MSC_VER

ServiceHead::ServiceHead()
  : ::google::protobuf::Message() {
  SharedCtor();
}

void ServiceHead::InitAsDefaultInstance() {
}

ServiceHead::ServiceHead(const ServiceHead& from)
  : ::google::protobuf::Message() {
  SharedCtor();
  MergeFrom(from);
}

void ServiceHead::SharedCtor() {
  _cached_size_ = 0;
  req_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  cmdcode_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  subcmd_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  portalseq_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  trantime_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  resultcode_ = 0;
  resultinfo_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  errorcode_ = 0;
  errinfo_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  sessionid_ = 0u;
  ::memset(_has_bits_, 0, sizeof(_has_bits_));
}

ServiceHead::~ServiceHead() {
  SharedDtor();
}

void ServiceHead::SharedDtor() {
  if (req_ != &::google::protobuf::internal::kEmptyString) {
    delete req_;
  }
  if (cmdcode_ != &::google::protobuf::internal::kEmptyString) {
    delete cmdcode_;
  }
  if (subcmd_ != &::google::protobuf::internal::kEmptyString) {
    delete subcmd_;
  }
  if (portalseq_ != &::google::protobuf::internal::kEmptyString) {
    delete portalseq_;
  }
  if (trantime_ != &::google::protobuf::internal::kEmptyString) {
    delete trantime_;
  }
  if (resultinfo_ != &::google::protobuf::internal::kEmptyString) {
    delete resultinfo_;
  }
  if (errinfo_ != &::google::protobuf::internal::kEmptyString) {
    delete errinfo_;
  }
  if (this != default_instance_) {
  }
}

void ServiceHead::SetCachedSize(int size) const {
  GOOGLE_SAFE_CONCURRENT_WRITES_BEGIN();
  _cached_size_ = size;
  GOOGLE_SAFE_CONCURRENT_WRITES_END();
}
const ::google::protobuf::Descriptor* ServiceHead::descriptor() {
  protobuf_AssignDescriptorsOnce();
  return ServiceHead_descriptor_;
}

const ServiceHead& ServiceHead::default_instance() {
  if (default_instance_ == NULL) protobuf_AddDesc_head_2eproto();
  return *default_instance_;
}

ServiceHead* ServiceHead::default_instance_ = NULL;

ServiceHead* ServiceHead::New() const {
  return new ServiceHead;
}

void ServiceHead::Clear() {
  if (_has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    if (has_req()) {
      if (req_ != &::google::protobuf::internal::kEmptyString) {
        req_->clear();
      }
    }
    if (has_cmdcode()) {
      if (cmdcode_ != &::google::protobuf::internal::kEmptyString) {
        cmdcode_->clear();
      }
    }
    if (has_subcmd()) {
      if (subcmd_ != &::google::protobuf::internal::kEmptyString) {
        subcmd_->clear();
      }
    }
    if (has_portalseq()) {
      if (portalseq_ != &::google::protobuf::internal::kEmptyString) {
        portalseq_->clear();
      }
    }
    if (has_trantime()) {
      if (trantime_ != &::google::protobuf::internal::kEmptyString) {
        trantime_->clear();
      }
    }
    resultcode_ = 0;
    if (has_resultinfo()) {
      if (resultinfo_ != &::google::protobuf::internal::kEmptyString) {
        resultinfo_->clear();
      }
    }
    errorcode_ = 0;
  }
  if (_has_bits_[8 / 32] & (0xffu << (8 % 32))) {
    if (has_errinfo()) {
      if (errinfo_ != &::google::protobuf::internal::kEmptyString) {
        errinfo_->clear();
      }
    }
    sessionid_ = 0u;
  }
  ::memset(_has_bits_, 0, sizeof(_has_bits_));
  mutable_unknown_fields()->Clear();
}

bool ServiceHead::MergePartialFromCodedStream(
    ::google::protobuf::io::CodedInputStream* input) {
#define DO_(EXPRESSION) if (!(EXPRESSION)) return false
  ::google::protobuf::uint32 tag;
  while ((tag = input->ReadTag()) != 0) {
    switch (::google::protobuf::internal::WireFormatLite::GetTagFieldNumber(tag)) {
      // required string req = 1;
      case 1: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
          DO_(::google::protobuf::internal::WireFormatLite::ReadString(
                input, this->mutable_req()));
          ::google::protobuf::internal::WireFormat::VerifyUTF8String(
            this->req().data(), this->req().length(),
            ::google::protobuf::internal::WireFormat::PARSE);
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(18)) goto parse_cmdcode;
        break;
      }

      // required string cmdcode = 2;
      case 2: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
         parse_cmdcode:
          DO_(::google::protobuf::internal::WireFormatLite::ReadString(
                input, this->mutable_cmdcode()));
          ::google::protobuf::internal::WireFormat::VerifyUTF8String(
            this->cmdcode().data(), this->cmdcode().length(),
            ::google::protobuf::internal::WireFormat::PARSE);
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(26)) goto parse_subcmd;
        break;
      }

      // optional string subcmd = 3;
      case 3: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
         parse_subcmd:
          DO_(::google::protobuf::internal::WireFormatLite::ReadString(
                input, this->mutable_subcmd()));
          ::google::protobuf::internal::WireFormat::VerifyUTF8String(
            this->subcmd().data(), this->subcmd().length(),
            ::google::protobuf::internal::WireFormat::PARSE);
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(34)) goto parse_portalseq;
        break;
      }

      // optional string portalseq = 4;
      case 4: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
         parse_portalseq:
          DO_(::google::protobuf::internal::WireFormatLite::ReadString(
                input, this->mutable_portalseq()));
          ::google::protobuf::internal::WireFormat::VerifyUTF8String(
            this->portalseq().data(), this->portalseq().length(),
            ::google::protobuf::internal::WireFormat::PARSE);
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(42)) goto parse_trantime;
        break;
      }

      // optional string trantime = 5;
      case 5: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
         parse_trantime:
          DO_(::google::protobuf::internal::WireFormatLite::ReadString(
                input, this->mutable_trantime()));
          ::google::protobuf::internal::WireFormat::VerifyUTF8String(
            this->trantime().data(), this->trantime().length(),
            ::google::protobuf::internal::WireFormat::PARSE);
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(48)) goto parse_resultcode;
        break;
      }

      // optional int32 resultcode = 6;
      case 6: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_VARINT) {
         parse_resultcode:
          DO_((::google::protobuf::internal::WireFormatLite::ReadPrimitive<
                   ::google::protobuf::int32, ::google::protobuf::internal::WireFormatLite::TYPE_INT32>(
                 input, &resultcode_)));
          set_has_resultcode();
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(58)) goto parse_resultinfo;
        break;
      }

      // optional string resultinfo = 7;
      case 7: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
         parse_resultinfo:
          DO_(::google::protobuf::internal::WireFormatLite::ReadString(
                input, this->mutable_resultinfo()));
          ::google::protobuf::internal::WireFormat::VerifyUTF8String(
            this->resultinfo().data(), this->resultinfo().length(),
            ::google::protobuf::internal::WireFormat::PARSE);
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(64)) goto parse_errorcode;
        break;
      }

      // optional int32 errorcode = 8;
      case 8: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_VARINT) {
         parse_errorcode:
          DO_((::google::protobuf::internal::WireFormatLite::ReadPrimitive<
                   ::google::protobuf::int32, ::google::protobuf::internal::WireFormatLite::TYPE_INT32>(
                 input, &errorcode_)));
          set_has_errorcode();
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(74)) goto parse_errinfo;
        break;
      }

      // optional string errinfo = 9;
      case 9: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
         parse_errinfo:
          DO_(::google::protobuf::internal::WireFormatLite::ReadString(
                input, this->mutable_errinfo()));
          ::google::protobuf::internal::WireFormat::VerifyUTF8String(
            this->errinfo().data(), this->errinfo().length(),
            ::google::protobuf::internal::WireFormat::PARSE);
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(80)) goto parse_sessionid;
        break;
      }

      // optional uint32 sessionid = 10;
      case 10: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_VARINT) {
         parse_sessionid:
          DO_((::google::protobuf::internal::WireFormatLite::ReadPrimitive<
                   ::google::protobuf::uint32, ::google::protobuf::internal::WireFormatLite::TYPE_UINT32>(
                 input, &sessionid_)));
          set_has_sessionid();
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectAtEnd()) return true;
        break;
      }

      default: {
      handle_uninterpreted:
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_END_GROUP) {
          return true;
        }
        DO_(::google::protobuf::internal::WireFormat::SkipField(
              input, tag, mutable_unknown_fields()));
        break;
      }
    }
  }
  return true;
#undef DO_
}

void ServiceHead::SerializeWithCachedSizes(
    ::google::protobuf::io::CodedOutputStream* output) const {
  // required string req = 1;
  if (has_req()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->req().data(), this->req().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    ::google::protobuf::internal::WireFormatLite::WriteString(
      1, this->req(), output);
  }

  // required string cmdcode = 2;
  if (has_cmdcode()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->cmdcode().data(), this->cmdcode().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    ::google::protobuf::internal::WireFormatLite::WriteString(
      2, this->cmdcode(), output);
  }

  // optional string subcmd = 3;
  if (has_subcmd()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->subcmd().data(), this->subcmd().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    ::google::protobuf::internal::WireFormatLite::WriteString(
      3, this->subcmd(), output);
  }

  // optional string portalseq = 4;
  if (has_portalseq()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->portalseq().data(), this->portalseq().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    ::google::protobuf::internal::WireFormatLite::WriteString(
      4, this->portalseq(), output);
  }

  // optional string trantime = 5;
  if (has_trantime()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->trantime().data(), this->trantime().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    ::google::protobuf::internal::WireFormatLite::WriteString(
      5, this->trantime(), output);
  }

  // optional int32 resultcode = 6;
  if (has_resultcode()) {
    ::google::protobuf::internal::WireFormatLite::WriteInt32(6, this->resultcode(), output);
  }

  // optional string resultinfo = 7;
  if (has_resultinfo()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->resultinfo().data(), this->resultinfo().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    ::google::protobuf::internal::WireFormatLite::WriteString(
      7, this->resultinfo(), output);
  }

  // optional int32 errorcode = 8;
  if (has_errorcode()) {
    ::google::protobuf::internal::WireFormatLite::WriteInt32(8, this->errorcode(), output);
  }

  // optional string errinfo = 9;
  if (has_errinfo()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->errinfo().data(), this->errinfo().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    ::google::protobuf::internal::WireFormatLite::WriteString(
      9, this->errinfo(), output);
  }

  // optional uint32 sessionid = 10;
  if (has_sessionid()) {
    ::google::protobuf::internal::WireFormatLite::WriteUInt32(10, this->sessionid(), output);
  }

  if (!unknown_fields().empty()) {
    ::google::protobuf::internal::WireFormat::SerializeUnknownFields(
        unknown_fields(), output);
  }
}

::google::protobuf::uint8* ServiceHead::SerializeWithCachedSizesToArray(
    ::google::protobuf::uint8* target) const {
  // required string req = 1;
  if (has_req()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->req().data(), this->req().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    target =
      ::google::protobuf::internal::WireFormatLite::WriteStringToArray(
        1, this->req(), target);
  }

  // required string cmdcode = 2;
  if (has_cmdcode()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->cmdcode().data(), this->cmdcode().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    target =
      ::google::protobuf::internal::WireFormatLite::WriteStringToArray(
        2, this->cmdcode(), target);
  }

  // optional string subcmd = 3;
  if (has_subcmd()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->subcmd().data(), this->subcmd().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    target =
      ::google::protobuf::internal::WireFormatLite::WriteStringToArray(
        3, this->subcmd(), target);
  }

  // optional string portalseq = 4;
  if (has_portalseq()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->portalseq().data(), this->portalseq().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    target =
      ::google::protobuf::internal::WireFormatLite::WriteStringToArray(
        4, this->portalseq(), target);
  }

  // optional string trantime = 5;
  if (has_trantime()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->trantime().data(), this->trantime().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    target =
      ::google::protobuf::internal::WireFormatLite::WriteStringToArray(
        5, this->trantime(), target);
  }

  // optional int32 resultcode = 6;
  if (has_resultcode()) {
    target = ::google::protobuf::internal::WireFormatLite::WriteInt32ToArray(6, this->resultcode(), target);
  }

  // optional string resultinfo = 7;
  if (has_resultinfo()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->resultinfo().data(), this->resultinfo().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    target =
      ::google::protobuf::internal::WireFormatLite::WriteStringToArray(
        7, this->resultinfo(), target);
  }

  // optional int32 errorcode = 8;
  if (has_errorcode()) {
    target = ::google::protobuf::internal::WireFormatLite::WriteInt32ToArray(8, this->errorcode(), target);
  }

  // optional string errinfo = 9;
  if (has_errinfo()) {
    ::google::protobuf::internal::WireFormat::VerifyUTF8String(
      this->errinfo().data(), this->errinfo().length(),
      ::google::protobuf::internal::WireFormat::SERIALIZE);
    target =
      ::google::protobuf::internal::WireFormatLite::WriteStringToArray(
        9, this->errinfo(), target);
  }

  // optional uint32 sessionid = 10;
  if (has_sessionid()) {
    target = ::google::protobuf::internal::WireFormatLite::WriteUInt32ToArray(10, this->sessionid(), target);
  }

  if (!unknown_fields().empty()) {
    target = ::google::protobuf::internal::WireFormat::SerializeUnknownFieldsToArray(
        unknown_fields(), target);
  }
  return target;
}

int ServiceHead::ByteSize() const {
  int total_size = 0;

  if (_has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    // required string req = 1;
    if (has_req()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::StringSize(
          this->req());
    }

    // required string cmdcode = 2;
    if (has_cmdcode()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::StringSize(
          this->cmdcode());
    }

    // optional string subcmd = 3;
    if (has_subcmd()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::StringSize(
          this->subcmd());
    }

    // optional string portalseq = 4;
    if (has_portalseq()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::StringSize(
          this->portalseq());
    }

    // optional string trantime = 5;
    if (has_trantime()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::StringSize(
          this->trantime());
    }

    // optional int32 resultcode = 6;
    if (has_resultcode()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::Int32Size(
          this->resultcode());
    }

    // optional string resultinfo = 7;
    if (has_resultinfo()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::StringSize(
          this->resultinfo());
    }

    // optional int32 errorcode = 8;
    if (has_errorcode()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::Int32Size(
          this->errorcode());
    }

  }
  if (_has_bits_[8 / 32] & (0xffu << (8 % 32))) {
    // optional string errinfo = 9;
    if (has_errinfo()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::StringSize(
          this->errinfo());
    }

    // optional uint32 sessionid = 10;
    if (has_sessionid()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::UInt32Size(
          this->sessionid());
    }

  }
  if (!unknown_fields().empty()) {
    total_size +=
      ::google::protobuf::internal::WireFormat::ComputeUnknownFieldsSize(
        unknown_fields());
  }
  GOOGLE_SAFE_CONCURRENT_WRITES_BEGIN();
  _cached_size_ = total_size;
  GOOGLE_SAFE_CONCURRENT_WRITES_END();
  return total_size;
}

void ServiceHead::MergeFrom(const ::google::protobuf::Message& from) {
  GOOGLE_CHECK_NE(&from, this);
  const ServiceHead* source =
    ::google::protobuf::internal::dynamic_cast_if_available<const ServiceHead*>(
      &from);
  if (source == NULL) {
    ::google::protobuf::internal::ReflectionOps::Merge(from, this);
  } else {
    MergeFrom(*source);
  }
}

void ServiceHead::MergeFrom(const ServiceHead& from) {
  GOOGLE_CHECK_NE(&from, this);
  if (from._has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    if (from.has_req()) {
      set_req(from.req());
    }
    if (from.has_cmdcode()) {
      set_cmdcode(from.cmdcode());
    }
    if (from.has_subcmd()) {
      set_subcmd(from.subcmd());
    }
    if (from.has_portalseq()) {
      set_portalseq(from.portalseq());
    }
    if (from.has_trantime()) {
      set_trantime(from.trantime());
    }
    if (from.has_resultcode()) {
      set_resultcode(from.resultcode());
    }
    if (from.has_resultinfo()) {
      set_resultinfo(from.resultinfo());
    }
    if (from.has_errorcode()) {
      set_errorcode(from.errorcode());
    }
  }
  if (from._has_bits_[8 / 32] & (0xffu << (8 % 32))) {
    if (from.has_errinfo()) {
      set_errinfo(from.errinfo());
    }
    if (from.has_sessionid()) {
      set_sessionid(from.sessionid());
    }
  }
  mutable_unknown_fields()->MergeFrom(from.unknown_fields());
}

void ServiceHead::CopyFrom(const ::google::protobuf::Message& from) {
  if (&from == this) return;
  Clear();
  MergeFrom(from);
}

void ServiceHead::CopyFrom(const ServiceHead& from) {
  if (&from == this) return;
  Clear();
  MergeFrom(from);
}

bool ServiceHead::IsInitialized() const {
  if ((_has_bits_[0] & 0x00000003) != 0x00000003) return false;

  return true;
}

void ServiceHead::Swap(ServiceHead* other) {
  if (other != this) {
    std::swap(req_, other->req_);
    std::swap(cmdcode_, other->cmdcode_);
    std::swap(subcmd_, other->subcmd_);
    std::swap(portalseq_, other->portalseq_);
    std::swap(trantime_, other->trantime_);
    std::swap(resultcode_, other->resultcode_);
    std::swap(resultinfo_, other->resultinfo_);
    std::swap(errorcode_, other->errorcode_);
    std::swap(errinfo_, other->errinfo_);
    std::swap(sessionid_, other->sessionid_);
    std::swap(_has_bits_[0], other->_has_bits_[0]);
    _unknown_fields_.Swap(&other->_unknown_fields_);
    std::swap(_cached_size_, other->_cached_size_);
  }
}

::google::protobuf::Metadata ServiceHead::GetMetadata() const {
  protobuf_AssignDescriptorsOnce();
  ::google::protobuf::Metadata metadata;
  metadata.descriptor = ServiceHead_descriptor_;
  metadata.reflection = ServiceHead_reflection_;
  return metadata;
}


// @@protoc_insertion_point(namespace_scope)

}  // namespace ts

// @@protoc_insertion_point(global_scope)
