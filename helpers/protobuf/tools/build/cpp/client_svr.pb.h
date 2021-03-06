// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: client_svr.proto

#ifndef PROTOBUF_client_5fsvr_2eproto__INCLUDED
#define PROTOBUF_client_5fsvr_2eproto__INCLUDED

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
void  protobuf_AddDesc_client_5fsvr_2eproto();
void protobuf_AssignDesc_client_5fsvr_2eproto();
void protobuf_ShutdownFile_client_5fsvr_2eproto();

class ClientReq;
class ClientAns;

// ===================================================================

class ClientReq : public ::google::protobuf::Message {
 public:
  ClientReq();
  virtual ~ClientReq();

  ClientReq(const ClientReq& from);

  inline ClientReq& operator=(const ClientReq& from) {
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
  static const ClientReq& default_instance();

  void Swap(ClientReq* other);

  // implements Message ----------------------------------------------

  ClientReq* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const ClientReq& from);
  void MergeFrom(const ClientReq& from);
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

  // required .ts.ClientInfo client = 2;
  inline bool has_client() const;
  inline void clear_client();
  static const int kClientFieldNumber = 2;
  inline const ::ts::ClientInfo& client() const;
  inline ::ts::ClientInfo* mutable_client();
  inline ::ts::ClientInfo* release_client();
  inline void set_allocated_client(::ts::ClientInfo* client);

  // optional string topclientid = 3;
  inline bool has_topclientid() const;
  inline void clear_topclientid();
  static const int kTopclientidFieldNumber = 3;
  inline const ::std::string& topclientid() const;
  inline void set_topclientid(const ::std::string& value);
  inline void set_topclientid(const char* value);
  inline void set_topclientid(const char* value, size_t size);
  inline ::std::string* mutable_topclientid();
  inline ::std::string* release_topclientid();
  inline void set_allocated_topclientid(::std::string* topclientid);

  // @@protoc_insertion_point(class_scope:ts.ClientReq)
 private:
  inline void set_has_head();
  inline void clear_has_head();
  inline void set_has_client();
  inline void clear_has_client();
  inline void set_has_topclientid();
  inline void clear_has_topclientid();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::ts::ServiceHead* head_;
  ::ts::ClientInfo* client_;
  ::std::string* topclientid_;

  mutable int _cached_size_;
  ::google::protobuf::uint32 _has_bits_[(3 + 31) / 32];

  friend void  protobuf_AddDesc_client_5fsvr_2eproto();
  friend void protobuf_AssignDesc_client_5fsvr_2eproto();
  friend void protobuf_ShutdownFile_client_5fsvr_2eproto();

  void InitAsDefaultInstance();
  static ClientReq* default_instance_;
};
// -------------------------------------------------------------------

class ClientAns : public ::google::protobuf::Message {
 public:
  ClientAns();
  virtual ~ClientAns();

  ClientAns(const ClientAns& from);

  inline ClientAns& operator=(const ClientAns& from) {
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
  static const ClientAns& default_instance();

  void Swap(ClientAns* other);

  // implements Message ----------------------------------------------

  ClientAns* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const ClientAns& from);
  void MergeFrom(const ClientAns& from);
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

  // optional .ts.ClientList clientList = 2;
  inline bool has_clientlist() const;
  inline void clear_clientlist();
  static const int kClientListFieldNumber = 2;
  inline const ::ts::ClientList& clientlist() const;
  inline ::ts::ClientList* mutable_clientlist();
  inline ::ts::ClientList* release_clientlist();
  inline void set_allocated_clientlist(::ts::ClientList* clientlist);

  // optional string strclientlist = 3;
  inline bool has_strclientlist() const;
  inline void clear_strclientlist();
  static const int kStrclientlistFieldNumber = 3;
  inline const ::std::string& strclientlist() const;
  inline void set_strclientlist(const ::std::string& value);
  inline void set_strclientlist(const char* value);
  inline void set_strclientlist(const char* value, size_t size);
  inline ::std::string* mutable_strclientlist();
  inline ::std::string* release_strclientlist();
  inline void set_allocated_strclientlist(::std::string* strclientlist);

  // @@protoc_insertion_point(class_scope:ts.ClientAns)
 private:
  inline void set_has_head();
  inline void clear_has_head();
  inline void set_has_clientlist();
  inline void clear_has_clientlist();
  inline void set_has_strclientlist();
  inline void clear_has_strclientlist();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::ts::ServiceHead* head_;
  ::ts::ClientList* clientlist_;
  ::std::string* strclientlist_;

  mutable int _cached_size_;
  ::google::protobuf::uint32 _has_bits_[(3 + 31) / 32];

  friend void  protobuf_AddDesc_client_5fsvr_2eproto();
  friend void protobuf_AssignDesc_client_5fsvr_2eproto();
  friend void protobuf_ShutdownFile_client_5fsvr_2eproto();

  void InitAsDefaultInstance();
  static ClientAns* default_instance_;
};
// ===================================================================


// ===================================================================

// ClientReq

// required .ts.ServiceHead head = 1;
inline bool ClientReq::has_head() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void ClientReq::set_has_head() {
  _has_bits_[0] |= 0x00000001u;
}
inline void ClientReq::clear_has_head() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void ClientReq::clear_head() {
  if (head_ != NULL) head_->::ts::ServiceHead::Clear();
  clear_has_head();
}
inline const ::ts::ServiceHead& ClientReq::head() const {
  return head_ != NULL ? *head_ : *default_instance_->head_;
}
inline ::ts::ServiceHead* ClientReq::mutable_head() {
  set_has_head();
  if (head_ == NULL) head_ = new ::ts::ServiceHead;
  return head_;
}
inline ::ts::ServiceHead* ClientReq::release_head() {
  clear_has_head();
  ::ts::ServiceHead* temp = head_;
  head_ = NULL;
  return temp;
}
inline void ClientReq::set_allocated_head(::ts::ServiceHead* head) {
  delete head_;
  head_ = head;
  if (head) {
    set_has_head();
  } else {
    clear_has_head();
  }
}

// required .ts.ClientInfo client = 2;
inline bool ClientReq::has_client() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void ClientReq::set_has_client() {
  _has_bits_[0] |= 0x00000002u;
}
inline void ClientReq::clear_has_client() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void ClientReq::clear_client() {
  if (client_ != NULL) client_->::ts::ClientInfo::Clear();
  clear_has_client();
}
inline const ::ts::ClientInfo& ClientReq::client() const {
  return client_ != NULL ? *client_ : *default_instance_->client_;
}
inline ::ts::ClientInfo* ClientReq::mutable_client() {
  set_has_client();
  if (client_ == NULL) client_ = new ::ts::ClientInfo;
  return client_;
}
inline ::ts::ClientInfo* ClientReq::release_client() {
  clear_has_client();
  ::ts::ClientInfo* temp = client_;
  client_ = NULL;
  return temp;
}
inline void ClientReq::set_allocated_client(::ts::ClientInfo* client) {
  delete client_;
  client_ = client;
  if (client) {
    set_has_client();
  } else {
    clear_has_client();
  }
}

// optional string topclientid = 3;
inline bool ClientReq::has_topclientid() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void ClientReq::set_has_topclientid() {
  _has_bits_[0] |= 0x00000004u;
}
inline void ClientReq::clear_has_topclientid() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void ClientReq::clear_topclientid() {
  if (topclientid_ != &::google::protobuf::internal::kEmptyString) {
    topclientid_->clear();
  }
  clear_has_topclientid();
}
inline const ::std::string& ClientReq::topclientid() const {
  return *topclientid_;
}
inline void ClientReq::set_topclientid(const ::std::string& value) {
  set_has_topclientid();
  if (topclientid_ == &::google::protobuf::internal::kEmptyString) {
    topclientid_ = new ::std::string;
  }
  topclientid_->assign(value);
}
inline void ClientReq::set_topclientid(const char* value) {
  set_has_topclientid();
  if (topclientid_ == &::google::protobuf::internal::kEmptyString) {
    topclientid_ = new ::std::string;
  }
  topclientid_->assign(value);
}
inline void ClientReq::set_topclientid(const char* value, size_t size) {
  set_has_topclientid();
  if (topclientid_ == &::google::protobuf::internal::kEmptyString) {
    topclientid_ = new ::std::string;
  }
  topclientid_->assign(reinterpret_cast<const char*>(value), size);
}
inline ::std::string* ClientReq::mutable_topclientid() {
  set_has_topclientid();
  if (topclientid_ == &::google::protobuf::internal::kEmptyString) {
    topclientid_ = new ::std::string;
  }
  return topclientid_;
}
inline ::std::string* ClientReq::release_topclientid() {
  clear_has_topclientid();
  if (topclientid_ == &::google::protobuf::internal::kEmptyString) {
    return NULL;
  } else {
    ::std::string* temp = topclientid_;
    topclientid_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
    return temp;
  }
}
inline void ClientReq::set_allocated_topclientid(::std::string* topclientid) {
  if (topclientid_ != &::google::protobuf::internal::kEmptyString) {
    delete topclientid_;
  }
  if (topclientid) {
    set_has_topclientid();
    topclientid_ = topclientid;
  } else {
    clear_has_topclientid();
    topclientid_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  }
}

// -------------------------------------------------------------------

// ClientAns

// required .ts.ServiceHead head = 1;
inline bool ClientAns::has_head() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void ClientAns::set_has_head() {
  _has_bits_[0] |= 0x00000001u;
}
inline void ClientAns::clear_has_head() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void ClientAns::clear_head() {
  if (head_ != NULL) head_->::ts::ServiceHead::Clear();
  clear_has_head();
}
inline const ::ts::ServiceHead& ClientAns::head() const {
  return head_ != NULL ? *head_ : *default_instance_->head_;
}
inline ::ts::ServiceHead* ClientAns::mutable_head() {
  set_has_head();
  if (head_ == NULL) head_ = new ::ts::ServiceHead;
  return head_;
}
inline ::ts::ServiceHead* ClientAns::release_head() {
  clear_has_head();
  ::ts::ServiceHead* temp = head_;
  head_ = NULL;
  return temp;
}
inline void ClientAns::set_allocated_head(::ts::ServiceHead* head) {
  delete head_;
  head_ = head;
  if (head) {
    set_has_head();
  } else {
    clear_has_head();
  }
}

// optional .ts.ClientList clientList = 2;
inline bool ClientAns::has_clientlist() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void ClientAns::set_has_clientlist() {
  _has_bits_[0] |= 0x00000002u;
}
inline void ClientAns::clear_has_clientlist() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void ClientAns::clear_clientlist() {
  if (clientlist_ != NULL) clientlist_->::ts::ClientList::Clear();
  clear_has_clientlist();
}
inline const ::ts::ClientList& ClientAns::clientlist() const {
  return clientlist_ != NULL ? *clientlist_ : *default_instance_->clientlist_;
}
inline ::ts::ClientList* ClientAns::mutable_clientlist() {
  set_has_clientlist();
  if (clientlist_ == NULL) clientlist_ = new ::ts::ClientList;
  return clientlist_;
}
inline ::ts::ClientList* ClientAns::release_clientlist() {
  clear_has_clientlist();
  ::ts::ClientList* temp = clientlist_;
  clientlist_ = NULL;
  return temp;
}
inline void ClientAns::set_allocated_clientlist(::ts::ClientList* clientlist) {
  delete clientlist_;
  clientlist_ = clientlist;
  if (clientlist) {
    set_has_clientlist();
  } else {
    clear_has_clientlist();
  }
}

// optional string strclientlist = 3;
inline bool ClientAns::has_strclientlist() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void ClientAns::set_has_strclientlist() {
  _has_bits_[0] |= 0x00000004u;
}
inline void ClientAns::clear_has_strclientlist() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void ClientAns::clear_strclientlist() {
  if (strclientlist_ != &::google::protobuf::internal::kEmptyString) {
    strclientlist_->clear();
  }
  clear_has_strclientlist();
}
inline const ::std::string& ClientAns::strclientlist() const {
  return *strclientlist_;
}
inline void ClientAns::set_strclientlist(const ::std::string& value) {
  set_has_strclientlist();
  if (strclientlist_ == &::google::protobuf::internal::kEmptyString) {
    strclientlist_ = new ::std::string;
  }
  strclientlist_->assign(value);
}
inline void ClientAns::set_strclientlist(const char* value) {
  set_has_strclientlist();
  if (strclientlist_ == &::google::protobuf::internal::kEmptyString) {
    strclientlist_ = new ::std::string;
  }
  strclientlist_->assign(value);
}
inline void ClientAns::set_strclientlist(const char* value, size_t size) {
  set_has_strclientlist();
  if (strclientlist_ == &::google::protobuf::internal::kEmptyString) {
    strclientlist_ = new ::std::string;
  }
  strclientlist_->assign(reinterpret_cast<const char*>(value), size);
}
inline ::std::string* ClientAns::mutable_strclientlist() {
  set_has_strclientlist();
  if (strclientlist_ == &::google::protobuf::internal::kEmptyString) {
    strclientlist_ = new ::std::string;
  }
  return strclientlist_;
}
inline ::std::string* ClientAns::release_strclientlist() {
  clear_has_strclientlist();
  if (strclientlist_ == &::google::protobuf::internal::kEmptyString) {
    return NULL;
  } else {
    ::std::string* temp = strclientlist_;
    strclientlist_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
    return temp;
  }
}
inline void ClientAns::set_allocated_strclientlist(::std::string* strclientlist) {
  if (strclientlist_ != &::google::protobuf::internal::kEmptyString) {
    delete strclientlist_;
  }
  if (strclientlist) {
    set_has_strclientlist();
    strclientlist_ = strclientlist;
  } else {
    clear_has_strclientlist();
    strclientlist_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  }
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

#endif  // PROTOBUF_client_5fsvr_2eproto__INCLUDED
