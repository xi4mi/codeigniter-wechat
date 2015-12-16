// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: pproxy.proto

#define INTERNAL_SUPPRESS_PROTOBUF_FIELD_DEPRECATION
#include "pproxy.pb.h"

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

const ::google::protobuf::Descriptor* Provide_descriptor_ = NULL;
const ::google::protobuf::internal::GeneratedMessageReflection*
  Provide_reflection_ = NULL;
const ::google::protobuf::Descriptor* ProvideAns_descriptor_ = NULL;
const ::google::protobuf::internal::GeneratedMessageReflection*
  ProvideAns_reflection_ = NULL;

}  // namespace


void protobuf_AssignDesc_pproxy_2eproto() {
  protobuf_AddDesc_pproxy_2eproto();
  const ::google::protobuf::FileDescriptor* file =
    ::google::protobuf::DescriptorPool::generated_pool()->FindFileByName(
      "pproxy.proto");
  GOOGLE_CHECK(file != NULL);
  Provide_descriptor_ = file->message_type(0);
  static const int Provide_offsets_[3] = {
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(Provide, head_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(Provide, product_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(Provide, client_),
  };
  Provide_reflection_ =
    new ::google::protobuf::internal::GeneratedMessageReflection(
      Provide_descriptor_,
      Provide::default_instance_,
      Provide_offsets_,
      GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(Provide, _has_bits_[0]),
      GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(Provide, _unknown_fields_),
      -1,
      ::google::protobuf::DescriptorPool::generated_pool(),
      ::google::protobuf::MessageFactory::generated_factory(),
      sizeof(Provide));
  ProvideAns_descriptor_ = file->message_type(1);
  static const int ProvideAns_offsets_[3] = {
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ProvideAns, head_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ProvideAns, product_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ProvideAns, client_),
  };
  ProvideAns_reflection_ =
    new ::google::protobuf::internal::GeneratedMessageReflection(
      ProvideAns_descriptor_,
      ProvideAns::default_instance_,
      ProvideAns_offsets_,
      GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ProvideAns, _has_bits_[0]),
      GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(ProvideAns, _unknown_fields_),
      -1,
      ::google::protobuf::DescriptorPool::generated_pool(),
      ::google::protobuf::MessageFactory::generated_factory(),
      sizeof(ProvideAns));
}

namespace {

GOOGLE_PROTOBUF_DECLARE_ONCE(protobuf_AssignDescriptors_once_);
inline void protobuf_AssignDescriptorsOnce() {
  ::google::protobuf::GoogleOnceInit(&protobuf_AssignDescriptors_once_,
                 &protobuf_AssignDesc_pproxy_2eproto);
}

void protobuf_RegisterTypes(const ::std::string&) {
  protobuf_AssignDescriptorsOnce();
  ::google::protobuf::MessageFactory::InternalRegisterGeneratedMessage(
    Provide_descriptor_, &Provide::default_instance());
  ::google::protobuf::MessageFactory::InternalRegisterGeneratedMessage(
    ProvideAns_descriptor_, &ProvideAns::default_instance());
}

}  // namespace

void protobuf_ShutdownFile_pproxy_2eproto() {
  delete Provide::default_instance_;
  delete Provide_reflection_;
  delete ProvideAns::default_instance_;
  delete ProvideAns_reflection_;
}

void protobuf_AddDesc_pproxy_2eproto() {
  static bool already_here = false;
  if (already_here) return;
  already_here = true;
  GOOGLE_PROTOBUF_VERIFY_VERSION;

  ::ts::protobuf_AddDesc_head_2eproto();
  ::ts::protobuf_AddDesc_product_2eproto();
  ::ts::protobuf_AddDesc_client_2eproto();
  ::google::protobuf::DescriptorPool::InternalAddGeneratedFile(
    "\n\014pproxy.proto\022\002ts\032\nhead.proto\032\rproduct."
    "proto\032\014client.proto\"j\n\007Provide\022\035\n\004head\030\001"
    " \002(\0132\017.ts.ServiceHead\022 \n\007product\030\002 \002(\0132\017"
    ".ts.ProductInfo\022\036\n\006client\030\003 \001(\0132\016.ts.Cli"
    "entInfo\"m\n\nProvideAns\022\035\n\004head\030\001 \002(\0132\017.ts"
    ".ServiceHead\022 \n\007product\030\002 \001(\0132\017.ts.Produ"
    "ctInfo\022\036\n\006client\030\003 \001(\0132\016.ts.ClientInfo", 278);
  ::google::protobuf::MessageFactory::InternalRegisterGeneratedFile(
    "pproxy.proto", &protobuf_RegisterTypes);
  Provide::default_instance_ = new Provide();
  ProvideAns::default_instance_ = new ProvideAns();
  Provide::default_instance_->InitAsDefaultInstance();
  ProvideAns::default_instance_->InitAsDefaultInstance();
  ::google::protobuf::internal::OnShutdown(&protobuf_ShutdownFile_pproxy_2eproto);
}

// Force AddDescriptors() to be called at static initialization time.
struct StaticDescriptorInitializer_pproxy_2eproto {
  StaticDescriptorInitializer_pproxy_2eproto() {
    protobuf_AddDesc_pproxy_2eproto();
  }
} static_descriptor_initializer_pproxy_2eproto_;

// ===================================================================

#ifndef _MSC_VER
const int Provide::kHeadFieldNumber;
const int Provide::kProductFieldNumber;
const int Provide::kClientFieldNumber;
#endif  // !_MSC_VER

Provide::Provide()
  : ::google::protobuf::Message() {
  SharedCtor();
}

void Provide::InitAsDefaultInstance() {
  head_ = const_cast< ::ts::ServiceHead*>(&::ts::ServiceHead::default_instance());
  product_ = const_cast< ::ts::ProductInfo*>(&::ts::ProductInfo::default_instance());
  client_ = const_cast< ::ts::ClientInfo*>(&::ts::ClientInfo::default_instance());
}

Provide::Provide(const Provide& from)
  : ::google::protobuf::Message() {
  SharedCtor();
  MergeFrom(from);
}

void Provide::SharedCtor() {
  _cached_size_ = 0;
  head_ = NULL;
  product_ = NULL;
  client_ = NULL;
  ::memset(_has_bits_, 0, sizeof(_has_bits_));
}

Provide::~Provide() {
  SharedDtor();
}

void Provide::SharedDtor() {
  if (this != default_instance_) {
    delete head_;
    delete product_;
    delete client_;
  }
}

void Provide::SetCachedSize(int size) const {
  GOOGLE_SAFE_CONCURRENT_WRITES_BEGIN();
  _cached_size_ = size;
  GOOGLE_SAFE_CONCURRENT_WRITES_END();
}
const ::google::protobuf::Descriptor* Provide::descriptor() {
  protobuf_AssignDescriptorsOnce();
  return Provide_descriptor_;
}

const Provide& Provide::default_instance() {
  if (default_instance_ == NULL) protobuf_AddDesc_pproxy_2eproto();
  return *default_instance_;
}

Provide* Provide::default_instance_ = NULL;

Provide* Provide::New() const {
  return new Provide;
}

void Provide::Clear() {
  if (_has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    if (has_head()) {
      if (head_ != NULL) head_->::ts::ServiceHead::Clear();
    }
    if (has_product()) {
      if (product_ != NULL) product_->::ts::ProductInfo::Clear();
    }
    if (has_client()) {
      if (client_ != NULL) client_->::ts::ClientInfo::Clear();
    }
  }
  ::memset(_has_bits_, 0, sizeof(_has_bits_));
  mutable_unknown_fields()->Clear();
}

bool Provide::MergePartialFromCodedStream(
    ::google::protobuf::io::CodedInputStream* input) {
#define DO_(EXPRESSION) if (!(EXPRESSION)) return false
  ::google::protobuf::uint32 tag;
  while ((tag = input->ReadTag()) != 0) {
    switch (::google::protobuf::internal::WireFormatLite::GetTagFieldNumber(tag)) {
      // required .ts.ServiceHead head = 1;
      case 1: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
          DO_(::google::protobuf::internal::WireFormatLite::ReadMessageNoVirtual(
               input, mutable_head()));
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(18)) goto parse_product;
        break;
      }

      // required .ts.ProductInfo product = 2;
      case 2: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
         parse_product:
          DO_(::google::protobuf::internal::WireFormatLite::ReadMessageNoVirtual(
               input, mutable_product()));
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(26)) goto parse_client;
        break;
      }

      // optional .ts.ClientInfo client = 3;
      case 3: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
         parse_client:
          DO_(::google::protobuf::internal::WireFormatLite::ReadMessageNoVirtual(
               input, mutable_client()));
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

void Provide::SerializeWithCachedSizes(
    ::google::protobuf::io::CodedOutputStream* output) const {
  // required .ts.ServiceHead head = 1;
  if (has_head()) {
    ::google::protobuf::internal::WireFormatLite::WriteMessageMaybeToArray(
      1, this->head(), output);
  }

  // required .ts.ProductInfo product = 2;
  if (has_product()) {
    ::google::protobuf::internal::WireFormatLite::WriteMessageMaybeToArray(
      2, this->product(), output);
  }

  // optional .ts.ClientInfo client = 3;
  if (has_client()) {
    ::google::protobuf::internal::WireFormatLite::WriteMessageMaybeToArray(
      3, this->client(), output);
  }

  if (!unknown_fields().empty()) {
    ::google::protobuf::internal::WireFormat::SerializeUnknownFields(
        unknown_fields(), output);
  }
}

::google::protobuf::uint8* Provide::SerializeWithCachedSizesToArray(
    ::google::protobuf::uint8* target) const {
  // required .ts.ServiceHead head = 1;
  if (has_head()) {
    target = ::google::protobuf::internal::WireFormatLite::
      WriteMessageNoVirtualToArray(
        1, this->head(), target);
  }

  // required .ts.ProductInfo product = 2;
  if (has_product()) {
    target = ::google::protobuf::internal::WireFormatLite::
      WriteMessageNoVirtualToArray(
        2, this->product(), target);
  }

  // optional .ts.ClientInfo client = 3;
  if (has_client()) {
    target = ::google::protobuf::internal::WireFormatLite::
      WriteMessageNoVirtualToArray(
        3, this->client(), target);
  }

  if (!unknown_fields().empty()) {
    target = ::google::protobuf::internal::WireFormat::SerializeUnknownFieldsToArray(
        unknown_fields(), target);
  }
  return target;
}

int Provide::ByteSize() const {
  int total_size = 0;

  if (_has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    // required .ts.ServiceHead head = 1;
    if (has_head()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::MessageSizeNoVirtual(
          this->head());
    }

    // required .ts.ProductInfo product = 2;
    if (has_product()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::MessageSizeNoVirtual(
          this->product());
    }

    // optional .ts.ClientInfo client = 3;
    if (has_client()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::MessageSizeNoVirtual(
          this->client());
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

void Provide::MergeFrom(const ::google::protobuf::Message& from) {
  GOOGLE_CHECK_NE(&from, this);
  const Provide* source =
    ::google::protobuf::internal::dynamic_cast_if_available<const Provide*>(
      &from);
  if (source == NULL) {
    ::google::protobuf::internal::ReflectionOps::Merge(from, this);
  } else {
    MergeFrom(*source);
  }
}

void Provide::MergeFrom(const Provide& from) {
  GOOGLE_CHECK_NE(&from, this);
  if (from._has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    if (from.has_head()) {
      mutable_head()->::ts::ServiceHead::MergeFrom(from.head());
    }
    if (from.has_product()) {
      mutable_product()->::ts::ProductInfo::MergeFrom(from.product());
    }
    if (from.has_client()) {
      mutable_client()->::ts::ClientInfo::MergeFrom(from.client());
    }
  }
  mutable_unknown_fields()->MergeFrom(from.unknown_fields());
}

void Provide::CopyFrom(const ::google::protobuf::Message& from) {
  if (&from == this) return;
  Clear();
  MergeFrom(from);
}

void Provide::CopyFrom(const Provide& from) {
  if (&from == this) return;
  Clear();
  MergeFrom(from);
}

bool Provide::IsInitialized() const {
  if ((_has_bits_[0] & 0x00000003) != 0x00000003) return false;

  if (has_head()) {
    if (!this->head().IsInitialized()) return false;
  }
  if (has_product()) {
    if (!this->product().IsInitialized()) return false;
  }
  if (has_client()) {
    if (!this->client().IsInitialized()) return false;
  }
  return true;
}

void Provide::Swap(Provide* other) {
  if (other != this) {
    std::swap(head_, other->head_);
    std::swap(product_, other->product_);
    std::swap(client_, other->client_);
    std::swap(_has_bits_[0], other->_has_bits_[0]);
    _unknown_fields_.Swap(&other->_unknown_fields_);
    std::swap(_cached_size_, other->_cached_size_);
  }
}

::google::protobuf::Metadata Provide::GetMetadata() const {
  protobuf_AssignDescriptorsOnce();
  ::google::protobuf::Metadata metadata;
  metadata.descriptor = Provide_descriptor_;
  metadata.reflection = Provide_reflection_;
  return metadata;
}


// ===================================================================

#ifndef _MSC_VER
const int ProvideAns::kHeadFieldNumber;
const int ProvideAns::kProductFieldNumber;
const int ProvideAns::kClientFieldNumber;
#endif  // !_MSC_VER

ProvideAns::ProvideAns()
  : ::google::protobuf::Message() {
  SharedCtor();
}

void ProvideAns::InitAsDefaultInstance() {
  head_ = const_cast< ::ts::ServiceHead*>(&::ts::ServiceHead::default_instance());
  product_ = const_cast< ::ts::ProductInfo*>(&::ts::ProductInfo::default_instance());
  client_ = const_cast< ::ts::ClientInfo*>(&::ts::ClientInfo::default_instance());
}

ProvideAns::ProvideAns(const ProvideAns& from)
  : ::google::protobuf::Message() {
  SharedCtor();
  MergeFrom(from);
}

void ProvideAns::SharedCtor() {
  _cached_size_ = 0;
  head_ = NULL;
  product_ = NULL;
  client_ = NULL;
  ::memset(_has_bits_, 0, sizeof(_has_bits_));
}

ProvideAns::~ProvideAns() {
  SharedDtor();
}

void ProvideAns::SharedDtor() {
  if (this != default_instance_) {
    delete head_;
    delete product_;
    delete client_;
  }
}

void ProvideAns::SetCachedSize(int size) const {
  GOOGLE_SAFE_CONCURRENT_WRITES_BEGIN();
  _cached_size_ = size;
  GOOGLE_SAFE_CONCURRENT_WRITES_END();
}
const ::google::protobuf::Descriptor* ProvideAns::descriptor() {
  protobuf_AssignDescriptorsOnce();
  return ProvideAns_descriptor_;
}

const ProvideAns& ProvideAns::default_instance() {
  if (default_instance_ == NULL) protobuf_AddDesc_pproxy_2eproto();
  return *default_instance_;
}

ProvideAns* ProvideAns::default_instance_ = NULL;

ProvideAns* ProvideAns::New() const {
  return new ProvideAns;
}

void ProvideAns::Clear() {
  if (_has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    if (has_head()) {
      if (head_ != NULL) head_->::ts::ServiceHead::Clear();
    }
    if (has_product()) {
      if (product_ != NULL) product_->::ts::ProductInfo::Clear();
    }
    if (has_client()) {
      if (client_ != NULL) client_->::ts::ClientInfo::Clear();
    }
  }
  ::memset(_has_bits_, 0, sizeof(_has_bits_));
  mutable_unknown_fields()->Clear();
}

bool ProvideAns::MergePartialFromCodedStream(
    ::google::protobuf::io::CodedInputStream* input) {
#define DO_(EXPRESSION) if (!(EXPRESSION)) return false
  ::google::protobuf::uint32 tag;
  while ((tag = input->ReadTag()) != 0) {
    switch (::google::protobuf::internal::WireFormatLite::GetTagFieldNumber(tag)) {
      // required .ts.ServiceHead head = 1;
      case 1: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
          DO_(::google::protobuf::internal::WireFormatLite::ReadMessageNoVirtual(
               input, mutable_head()));
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(18)) goto parse_product;
        break;
      }

      // optional .ts.ProductInfo product = 2;
      case 2: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
         parse_product:
          DO_(::google::protobuf::internal::WireFormatLite::ReadMessageNoVirtual(
               input, mutable_product()));
        } else {
          goto handle_uninterpreted;
        }
        if (input->ExpectTag(26)) goto parse_client;
        break;
      }

      // optional .ts.ClientInfo client = 3;
      case 3: {
        if (::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_LENGTH_DELIMITED) {
         parse_client:
          DO_(::google::protobuf::internal::WireFormatLite::ReadMessageNoVirtual(
               input, mutable_client()));
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

void ProvideAns::SerializeWithCachedSizes(
    ::google::protobuf::io::CodedOutputStream* output) const {
  // required .ts.ServiceHead head = 1;
  if (has_head()) {
    ::google::protobuf::internal::WireFormatLite::WriteMessageMaybeToArray(
      1, this->head(), output);
  }

  // optional .ts.ProductInfo product = 2;
  if (has_product()) {
    ::google::protobuf::internal::WireFormatLite::WriteMessageMaybeToArray(
      2, this->product(), output);
  }

  // optional .ts.ClientInfo client = 3;
  if (has_client()) {
    ::google::protobuf::internal::WireFormatLite::WriteMessageMaybeToArray(
      3, this->client(), output);
  }

  if (!unknown_fields().empty()) {
    ::google::protobuf::internal::WireFormat::SerializeUnknownFields(
        unknown_fields(), output);
  }
}

::google::protobuf::uint8* ProvideAns::SerializeWithCachedSizesToArray(
    ::google::protobuf::uint8* target) const {
  // required .ts.ServiceHead head = 1;
  if (has_head()) {
    target = ::google::protobuf::internal::WireFormatLite::
      WriteMessageNoVirtualToArray(
        1, this->head(), target);
  }

  // optional .ts.ProductInfo product = 2;
  if (has_product()) {
    target = ::google::protobuf::internal::WireFormatLite::
      WriteMessageNoVirtualToArray(
        2, this->product(), target);
  }

  // optional .ts.ClientInfo client = 3;
  if (has_client()) {
    target = ::google::protobuf::internal::WireFormatLite::
      WriteMessageNoVirtualToArray(
        3, this->client(), target);
  }

  if (!unknown_fields().empty()) {
    target = ::google::protobuf::internal::WireFormat::SerializeUnknownFieldsToArray(
        unknown_fields(), target);
  }
  return target;
}

int ProvideAns::ByteSize() const {
  int total_size = 0;

  if (_has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    // required .ts.ServiceHead head = 1;
    if (has_head()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::MessageSizeNoVirtual(
          this->head());
    }

    // optional .ts.ProductInfo product = 2;
    if (has_product()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::MessageSizeNoVirtual(
          this->product());
    }

    // optional .ts.ClientInfo client = 3;
    if (has_client()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::MessageSizeNoVirtual(
          this->client());
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

void ProvideAns::MergeFrom(const ::google::protobuf::Message& from) {
  GOOGLE_CHECK_NE(&from, this);
  const ProvideAns* source =
    ::google::protobuf::internal::dynamic_cast_if_available<const ProvideAns*>(
      &from);
  if (source == NULL) {
    ::google::protobuf::internal::ReflectionOps::Merge(from, this);
  } else {
    MergeFrom(*source);
  }
}

void ProvideAns::MergeFrom(const ProvideAns& from) {
  GOOGLE_CHECK_NE(&from, this);
  if (from._has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    if (from.has_head()) {
      mutable_head()->::ts::ServiceHead::MergeFrom(from.head());
    }
    if (from.has_product()) {
      mutable_product()->::ts::ProductInfo::MergeFrom(from.product());
    }
    if (from.has_client()) {
      mutable_client()->::ts::ClientInfo::MergeFrom(from.client());
    }
  }
  mutable_unknown_fields()->MergeFrom(from.unknown_fields());
}

void ProvideAns::CopyFrom(const ::google::protobuf::Message& from) {
  if (&from == this) return;
  Clear();
  MergeFrom(from);
}

void ProvideAns::CopyFrom(const ProvideAns& from) {
  if (&from == this) return;
  Clear();
  MergeFrom(from);
}

bool ProvideAns::IsInitialized() const {
  if ((_has_bits_[0] & 0x00000001) != 0x00000001) return false;

  if (has_head()) {
    if (!this->head().IsInitialized()) return false;
  }
  if (has_product()) {
    if (!this->product().IsInitialized()) return false;
  }
  if (has_client()) {
    if (!this->client().IsInitialized()) return false;
  }
  return true;
}

void ProvideAns::Swap(ProvideAns* other) {
  if (other != this) {
    std::swap(head_, other->head_);
    std::swap(product_, other->product_);
    std::swap(client_, other->client_);
    std::swap(_has_bits_[0], other->_has_bits_[0]);
    _unknown_fields_.Swap(&other->_unknown_fields_);
    std::swap(_cached_size_, other->_cached_size_);
  }
}

::google::protobuf::Metadata ProvideAns::GetMetadata() const {
  protobuf_AssignDescriptorsOnce();
  ::google::protobuf::Metadata metadata;
  metadata.descriptor = ProvideAns_descriptor_;
  metadata.reflection = ProvideAns_reflection_;
  return metadata;
}


// @@protoc_insertion_point(namespace_scope)

}  // namespace ts

// @@protoc_insertion_point(global_scope)
