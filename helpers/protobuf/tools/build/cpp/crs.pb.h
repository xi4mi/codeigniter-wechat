// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: crs.proto

#ifndef PROTOBUF_crs_2eproto__INCLUDED
#define PROTOBUF_crs_2eproto__INCLUDED

#include <string>

#include <google/protobuf/stubs/common.h>

#if GOOGLE_PROTOBUF_VERSION < 2005000
#error This file was generated by a newer version of protoc which is
#error incompatible with your Protocol Buffer headers.  Please update
#error your headers.
#endif
#if 2005000 < GOOGLE_PROTOBUF_MIN_PROTOC_VERSION
#error This file was generated by an older version of protoc which is
#error incompatible with your Protocol Buffer headers.  Please
#error regenerate this file with a newer version of protoc.
#endif

#include <google/protobuf/generated_message_util.h>
#include <google/protobuf/message.h>
#include <google/protobuf/repeated_field.h>
#include <google/protobuf/extension_set.h>
#include <google/protobuf/unknown_field_set.h>
#include "head.pb.h"
#include "client.pb.h"
// @@protoc_insertion_point(includes)

namespace ts {

// Internal implementation detail -- do not call these.
void  protobuf_AddDesc_crs_2eproto();
void protobuf_AssignDesc_crs_2eproto();
void protobuf_ShutdownFile_crs_2eproto();

class GetCRS;
class GetCRSAns;

// ===================================================================

class GetCRS : public ::google::protobuf::Message {
 public:
  GetCRS();
  virtual ~GetCRS();

  GetCRS(const GetCRS& from);

  inline GetCRS& operator=(const GetCRS& from) {
    CopyFrom(from);
    return *this;
  }

  inline const ::google::protobuf::UnknownFieldSet& unknown_fields() const {
    return _unknown_fields_;
  }

  inline ::google::protobuf::UnknownFieldSet* mutable_unknown_fields() {
    return &_unknown_fields_;
  }

  static const ::google::protobuf::Descriptor* descriptor();
  static const GetCRS& default_instance();

  void Swap(GetCRS* other);

  // implements Message ----------------------------------------------

  GetCRS* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const GetCRS& from);
  void MergeFrom(const GetCRS& from);
  void Clear();
  bool IsInitialized() const;

  int ByteSize() const;
  bool MergePartialFromCodedStream(
      ::google::protobuf::io::CodedInputStream* input);
  void SerializeWithCachedSizes(
      ::google::protobuf::io::CodedOutputStream* output) const;
  ::google::protobuf::uint8* SerializeWithCachedSizesToArray(::google::protobuf::uint8* output) const;
  int GetCachedSize() const { return _cached_size_; }
  private:
  void SharedCtor();
  void SharedDtor();
  void SetCachedSize(int size) const;
  public:

  ::google::protobuf::Metadata GetMetadata() const;

  // nested types ----------------------------------------------------

  // accessors -------------------------------------------------------

  // required .ts.ServiceHead head = 1;
  inline bool has_head() const;
  inline void clear_head();
  static const int kHeadFieldNumber = 1;
  inline const ::ts::ServiceHead& head() const;
  inline ::ts::ServiceHead* mutable_head();
  inline ::ts::ServiceHead* release_head();
  inline void set_allocated_head(::ts::ServiceHead* head);

  // required .ts.ClientInfo clientinfo = 2;
  inline bool has_clientinfo() const;
  inline void clear_clientinfo();
  static const int kClientinfoFieldNumber = 2;
  inline const ::ts::ClientInfo& clientinfo() const;
  inline ::ts::ClientInfo* mutable_clientinfo();
  inline ::ts::ClientInfo* release_clientinfo();
  inline void set_allocated_clientinfo(::ts::ClientInfo* clientinfo);

  // @@protoc_insertion_point(class_scope:ts.GetCRS)
 private:
  inline void set_has_head();
  inline void clear_has_head();
  inline void set_has_clientinfo();
  inline void clear_has_clientinfo();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::ts::ServiceHead* head_;
  ::ts::ClientInfo* clientinfo_;

  mutable int _cached_size_;
  ::google::protobuf::uint32 _has_bits_[(2 + 31) / 32];

  friend void  protobuf_AddDesc_crs_2eproto();
  friend void protobuf_AssignDesc_crs_2eproto();
  friend void protobuf_ShutdownFile_crs_2eproto();

  void InitAsDefaultInstance();
  static GetCRS* default_instance_;
};
// -------------------------------------------------------------------

class GetCRSAns : public ::google::protobuf::Message {
 public:
  GetCRSAns();
  virtual ~GetCRSAns();

  GetCRSAns(const GetCRSAns& from);

  inline GetCRSAns& operator=(const GetCRSAns& from) {
    CopyFrom(from);
    return *this;
  }

  inline const ::google::protobuf::UnknownFieldSet& unknown_fields() const {
    return _unknown_fields_;
  }

  inline ::google::protobuf::UnknownFieldSet* mutable_unknown_fields() {
    return &_unknown_fields_;
  }

  static const ::google::protobuf::Descriptor* descriptor();
  static const GetCRSAns& default_instance();

  void Swap(GetCRSAns* other);

  // implements Message ----------------------------------------------

  GetCRSAns* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const GetCRSAns& from);
  void MergeFrom(const GetCRSAns& from);
  void Clear();
  bool IsInitialized() const;

  int ByteSize() const;
  bool MergePartialFromCodedStream(
      ::google::protobuf::io::CodedInputStream* input);
  void SerializeWithCachedSizes(
      ::google::protobuf::io::CodedOutputStream* output) const;
  ::google::protobuf::uint8* SerializeWithCachedSizesToArray(::google::protobuf::uint8* output) const;
  int GetCachedSize() const { return _cached_size_; }
  private:
  void SharedCtor();
  void SharedDtor();
  void SetCachedSize(int size) const;
  public:

  ::google::protobuf::Metadata GetMetadata() const;

  // nested types ----------------------------------------------------

  // accessors -------------------------------------------------------

  // required .ts.ServiceHead head = 1;
  inline bool has_head() const;
  inline void clear_head();
  static const int kHeadFieldNumber = 1;
  inline const ::ts::ServiceHead& head() const;
  inline ::ts::ServiceHead* mutable_head();
  inline ::ts::ServiceHead* release_head();
  inline void set_allocated_head(::ts::ServiceHead* head);

  // repeated .ts.ClientInfo client_list = 2;
  inline int client_list_size() const;
  inline void clear_client_list();
  static const int kClientListFieldNumber = 2;
  inline const ::ts::ClientInfo& client_list(int index) const;
  inline ::ts::ClientInfo* mutable_client_list(int index);
  inline ::ts::ClientInfo* add_client_list();
  inline const ::google::protobuf::RepeatedPtrField< ::ts::ClientInfo >&
      client_list() const;
  inline ::google::protobuf::RepeatedPtrField< ::ts::ClientInfo >*
      mutable_client_list();

  // @@protoc_insertion_point(class_scope:ts.GetCRSAns)
 private:
  inline void set_has_head();
  inline void clear_has_head();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::ts::ServiceHead* head_;
  ::google::protobuf::RepeatedPtrField< ::ts::ClientInfo > client_list_;

  mutable int _cached_size_;
  ::google::protobuf::uint32 _has_bits_[(2 + 31) / 32];

  friend void  protobuf_AddDesc_crs_2eproto();
  friend void protobuf_AssignDesc_crs_2eproto();
  friend void protobuf_ShutdownFile_crs_2eproto();

  void InitAsDefaultInstance();
  static GetCRSAns* default_instance_;
};
// ===================================================================


// ===================================================================

// GetCRS

// required .ts.ServiceHead head = 1;
inline bool GetCRS::has_head() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void GetCRS::set_has_head() {
  _has_bits_[0] |= 0x00000001u;
}
inline void GetCRS::clear_has_head() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void GetCRS::clear_head() {
  if (head_ != NULL) head_->::ts::ServiceHead::Clear();
  clear_has_head();
}
inline const ::ts::ServiceHead& GetCRS::head() const {
  return head_ != NULL ? *head_ : *default_instance_->head_;
}
inline ::ts::ServiceHead* GetCRS::mutable_head() {
  set_has_head();
  if (head_ == NULL) head_ = new ::ts::ServiceHead;
  return head_;
}
inline ::ts::ServiceHead* GetCRS::release_head() {
  clear_has_head();
  ::ts::ServiceHead* temp = head_;
  head_ = NULL;
  return temp;
}
inline void GetCRS::set_allocated_head(::ts::ServiceHead* head) {
  delete head_;
  head_ = head;
  if (head) {
    set_has_head();
  } else {
    clear_has_head();
  }
}

// required .ts.ClientInfo clientinfo = 2;
inline bool GetCRS::has_clientinfo() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void GetCRS::set_has_clientinfo() {
  _has_bits_[0] |= 0x00000002u;
}
inline void GetCRS::clear_has_clientinfo() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void GetCRS::clear_clientinfo() {
  if (clientinfo_ != NULL) clientinfo_->::ts::ClientInfo::Clear();
  clear_has_clientinfo();
}
inline const ::ts::ClientInfo& GetCRS::clientinfo() const {
  return clientinfo_ != NULL ? *clientinfo_ : *default_instance_->clientinfo_;
}
inline ::ts::ClientInfo* GetCRS::mutable_clientinfo() {
  set_has_clientinfo();
  if (clientinfo_ == NULL) clientinfo_ = new ::ts::ClientInfo;
  return clientinfo_;
}
inline ::ts::ClientInfo* GetCRS::release_clientinfo() {
  clear_has_clientinfo();
  ::ts::ClientInfo* temp = clientinfo_;
  clientinfo_ = NULL;
  return temp;
}
inline void GetCRS::set_allocated_clientinfo(::ts::ClientInfo* clientinfo) {
  delete clientinfo_;
  clientinfo_ = clientinfo;
  if (clientinfo) {
    set_has_clientinfo();
  } else {
    clear_has_clientinfo();
  }
}

// -------------------------------------------------------------------

// GetCRSAns

// required .ts.ServiceHead head = 1;
inline bool GetCRSAns::has_head() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void GetCRSAns::set_has_head() {
  _has_bits_[0] |= 0x00000001u;
}
inline void GetCRSAns::clear_has_head() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void GetCRSAns::clear_head() {
  if (head_ != NULL) head_->::ts::ServiceHead::Clear();
  clear_has_head();
}
inline const ::ts::ServiceHead& GetCRSAns::head() const {
  return head_ != NULL ? *head_ : *default_instance_->head_;
}
inline ::ts::ServiceHead* GetCRSAns::mutable_head() {
  set_has_head();
  if (head_ == NULL) head_ = new ::ts::ServiceHead;
  return head_;
}
inline ::ts::ServiceHead* GetCRSAns::release_head() {
  clear_has_head();
  ::ts::ServiceHead* temp = head_;
  head_ = NULL;
  return temp;
}
inline void GetCRSAns::set_allocated_head(::ts::ServiceHead* head) {
  delete head_;
  head_ = head;
  if (head) {
    set_has_head();
  } else {
    clear_has_head();
  }
}

// repeated .ts.ClientInfo client_list = 2;
inline int GetCRSAns::client_list_size() const {
  return client_list_.size();
}
inline void GetCRSAns::clear_client_list() {
  client_list_.Clear();
}
inline const ::ts::ClientInfo& GetCRSAns::client_list(int index) const {
  return client_list_.Get(index);
}
inline ::ts::ClientInfo* GetCRSAns::mutable_client_list(int index) {
  return client_list_.Mutable(index);
}
inline ::ts::ClientInfo* GetCRSAns::add_client_list() {
  return client_list_.Add();
}
inline const ::google::protobuf::RepeatedPtrField< ::ts::ClientInfo >&
GetCRSAns::client_list() const {
  return client_list_;
}
inline ::google::protobuf::RepeatedPtrField< ::ts::ClientInfo >*
GetCRSAns::mutable_client_list() {
  return &client_list_;
}


// @@protoc_insertion_point(namespace_scope)

}  // namespace ts

#ifndef SWIG
namespace google {
namespace protobuf {


}  // namespace google
}  // namespace protobuf
#endif  // SWIG

// @@protoc_insertion_point(global_scope)

#endif  // PROTOBUF_crs_2eproto__INCLUDED