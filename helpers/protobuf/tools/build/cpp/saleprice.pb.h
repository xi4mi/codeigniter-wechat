// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: saleprice.proto

#ifndef PROTOBUF_saleprice_2eproto__INCLUDED
#define PROTOBUF_saleprice_2eproto__INCLUDED

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
#include "product.pb.h"
#include "pay.pb.h"
// @@protoc_insertion_point(includes)

namespace ts {

// Internal implementation detail -- do not call these.
void  protobuf_AddDesc_saleprice_2eproto();
void protobuf_AssignDesc_saleprice_2eproto();
void protobuf_ShutdownFile_saleprice_2eproto();

class SalePrice;
class SalePriceAns;

// ===================================================================

class SalePrice : public ::google::protobuf::Message {
 public:
  SalePrice();
  virtual ~SalePrice();

  SalePrice(const SalePrice& from);

  inline SalePrice& operator=(const SalePrice& from) {
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
  static const SalePrice& default_instance();

  void Swap(SalePrice* other);

  // implements Message ----------------------------------------------

  SalePrice* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const SalePrice& from);
  void MergeFrom(const SalePrice& from);
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

  // required .ts.ProductInfo product = 3;
  inline bool has_product() const;
  inline void clear_product();
  static const int kProductFieldNumber = 3;
  inline const ::ts::ProductInfo& product() const;
  inline ::ts::ProductInfo* mutable_product();
  inline ::ts::ProductInfo* release_product();
  inline void set_allocated_product(::ts::ProductInfo* product);

  // optional .ts.PayInfo payinfo = 4;
  inline bool has_payinfo() const;
  inline void clear_payinfo();
  static const int kPayinfoFieldNumber = 4;
  inline const ::ts::PayInfo& payinfo() const;
  inline ::ts::PayInfo* mutable_payinfo();
  inline ::ts::PayInfo* release_payinfo();
  inline void set_allocated_payinfo(::ts::PayInfo* payinfo);

  // repeated .ts.ClientInfo client_list = 5;
  inline int client_list_size() const;
  inline void clear_client_list();
  static const int kClientListFieldNumber = 5;
  inline const ::ts::ClientInfo& client_list(int index) const;
  inline ::ts::ClientInfo* mutable_client_list(int index);
  inline ::ts::ClientInfo* add_client_list();
  inline const ::google::protobuf::RepeatedPtrField< ::ts::ClientInfo >&
      client_list() const;
  inline ::google::protobuf::RepeatedPtrField< ::ts::ClientInfo >*
      mutable_client_list();

  // optional .ts.ProfitInfo profitinfo = 6;
  inline bool has_profitinfo() const;
  inline void clear_profitinfo();
  static const int kProfitinfoFieldNumber = 6;
  inline const ::ts::ProfitInfo& profitinfo() const;
  inline ::ts::ProfitInfo* mutable_profitinfo();
  inline ::ts::ProfitInfo* release_profitinfo();
  inline void set_allocated_profitinfo(::ts::ProfitInfo* profitinfo);

  // @@protoc_insertion_point(class_scope:ts.SalePrice)
 private:
  inline void set_has_head();
  inline void clear_has_head();
  inline void set_has_client();
  inline void clear_has_client();
  inline void set_has_product();
  inline void clear_has_product();
  inline void set_has_payinfo();
  inline void clear_has_payinfo();
  inline void set_has_profitinfo();
  inline void clear_has_profitinfo();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::ts::ServiceHead* head_;
  ::ts::ClientInfo* client_;
  ::ts::ProductInfo* product_;
  ::ts::PayInfo* payinfo_;
  ::google::protobuf::RepeatedPtrField< ::ts::ClientInfo > client_list_;
  ::ts::ProfitInfo* profitinfo_;

  mutable int _cached_size_;
  ::google::protobuf::uint32 _has_bits_[(6 + 31) / 32];

  friend void  protobuf_AddDesc_saleprice_2eproto();
  friend void protobuf_AssignDesc_saleprice_2eproto();
  friend void protobuf_ShutdownFile_saleprice_2eproto();

  void InitAsDefaultInstance();
  static SalePrice* default_instance_;
};
// -------------------------------------------------------------------

class SalePriceAns : public ::google::protobuf::Message {
 public:
  SalePriceAns();
  virtual ~SalePriceAns();

  SalePriceAns(const SalePriceAns& from);

  inline SalePriceAns& operator=(const SalePriceAns& from) {
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
  static const SalePriceAns& default_instance();

  void Swap(SalePriceAns* other);

  // implements Message ----------------------------------------------

  SalePriceAns* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const SalePriceAns& from);
  void MergeFrom(const SalePriceAns& from);
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

  // optional .ts.ClientInfo client = 2;
  inline bool has_client() const;
  inline void clear_client();
  static const int kClientFieldNumber = 2;
  inline const ::ts::ClientInfo& client() const;
  inline ::ts::ClientInfo* mutable_client();
  inline ::ts::ClientInfo* release_client();
  inline void set_allocated_client(::ts::ClientInfo* client);

  // optional .ts.ProductInfo product = 3;
  inline bool has_product() const;
  inline void clear_product();
  static const int kProductFieldNumber = 3;
  inline const ::ts::ProductInfo& product() const;
  inline ::ts::ProductInfo* mutable_product();
  inline ::ts::ProductInfo* release_product();
  inline void set_allocated_product(::ts::ProductInfo* product);

  // optional .ts.PayInfo payinfo = 4;
  inline bool has_payinfo() const;
  inline void clear_payinfo();
  static const int kPayinfoFieldNumber = 4;
  inline const ::ts::PayInfo& payinfo() const;
  inline ::ts::PayInfo* mutable_payinfo();
  inline ::ts::PayInfo* release_payinfo();
  inline void set_allocated_payinfo(::ts::PayInfo* payinfo);

  // optional .ts.ProfitInfo profitinfo = 5;
  inline bool has_profitinfo() const;
  inline void clear_profitinfo();
  static const int kProfitinfoFieldNumber = 5;
  inline const ::ts::ProfitInfo& profitinfo() const;
  inline ::ts::ProfitInfo* mutable_profitinfo();
  inline ::ts::ProfitInfo* release_profitinfo();
  inline void set_allocated_profitinfo(::ts::ProfitInfo* profitinfo);

  // @@protoc_insertion_point(class_scope:ts.SalePriceAns)
 private:
  inline void set_has_head();
  inline void clear_has_head();
  inline void set_has_client();
  inline void clear_has_client();
  inline void set_has_product();
  inline void clear_has_product();
  inline void set_has_payinfo();
  inline void clear_has_payinfo();
  inline void set_has_profitinfo();
  inline void clear_has_profitinfo();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::ts::ServiceHead* head_;
  ::ts::ClientInfo* client_;
  ::ts::ProductInfo* product_;
  ::ts::PayInfo* payinfo_;
  ::ts::ProfitInfo* profitinfo_;

  mutable int _cached_size_;
  ::google::protobuf::uint32 _has_bits_[(5 + 31) / 32];

  friend void  protobuf_AddDesc_saleprice_2eproto();
  friend void protobuf_AssignDesc_saleprice_2eproto();
  friend void protobuf_ShutdownFile_saleprice_2eproto();

  void InitAsDefaultInstance();
  static SalePriceAns* default_instance_;
};
// ===================================================================


// ===================================================================

// SalePrice

// required .ts.ServiceHead head = 1;
inline bool SalePrice::has_head() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void SalePrice::set_has_head() {
  _has_bits_[0] |= 0x00000001u;
}
inline void SalePrice::clear_has_head() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void SalePrice::clear_head() {
  if (head_ != NULL) head_->::ts::ServiceHead::Clear();
  clear_has_head();
}
inline const ::ts::ServiceHead& SalePrice::head() const {
  return head_ != NULL ? *head_ : *default_instance_->head_;
}
inline ::ts::ServiceHead* SalePrice::mutable_head() {
  set_has_head();
  if (head_ == NULL) head_ = new ::ts::ServiceHead;
  return head_;
}
inline ::ts::ServiceHead* SalePrice::release_head() {
  clear_has_head();
  ::ts::ServiceHead* temp = head_;
  head_ = NULL;
  return temp;
}
inline void SalePrice::set_allocated_head(::ts::ServiceHead* head) {
  delete head_;
  head_ = head;
  if (head) {
    set_has_head();
  } else {
    clear_has_head();
  }
}

// required .ts.ClientInfo client = 2;
inline bool SalePrice::has_client() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void SalePrice::set_has_client() {
  _has_bits_[0] |= 0x00000002u;
}
inline void SalePrice::clear_has_client() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void SalePrice::clear_client() {
  if (client_ != NULL) client_->::ts::ClientInfo::Clear();
  clear_has_client();
}
inline const ::ts::ClientInfo& SalePrice::client() const {
  return client_ != NULL ? *client_ : *default_instance_->client_;
}
inline ::ts::ClientInfo* SalePrice::mutable_client() {
  set_has_client();
  if (client_ == NULL) client_ = new ::ts::ClientInfo;
  return client_;
}
inline ::ts::ClientInfo* SalePrice::release_client() {
  clear_has_client();
  ::ts::ClientInfo* temp = client_;
  client_ = NULL;
  return temp;
}
inline void SalePrice::set_allocated_client(::ts::ClientInfo* client) {
  delete client_;
  client_ = client;
  if (client) {
    set_has_client();
  } else {
    clear_has_client();
  }
}

// required .ts.ProductInfo product = 3;
inline bool SalePrice::has_product() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void SalePrice::set_has_product() {
  _has_bits_[0] |= 0x00000004u;
}
inline void SalePrice::clear_has_product() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void SalePrice::clear_product() {
  if (product_ != NULL) product_->::ts::ProductInfo::Clear();
  clear_has_product();
}
inline const ::ts::ProductInfo& SalePrice::product() const {
  return product_ != NULL ? *product_ : *default_instance_->product_;
}
inline ::ts::ProductInfo* SalePrice::mutable_product() {
  set_has_product();
  if (product_ == NULL) product_ = new ::ts::ProductInfo;
  return product_;
}
inline ::ts::ProductInfo* SalePrice::release_product() {
  clear_has_product();
  ::ts::ProductInfo* temp = product_;
  product_ = NULL;
  return temp;
}
inline void SalePrice::set_allocated_product(::ts::ProductInfo* product) {
  delete product_;
  product_ = product;
  if (product) {
    set_has_product();
  } else {
    clear_has_product();
  }
}

// optional .ts.PayInfo payinfo = 4;
inline bool SalePrice::has_payinfo() const {
  return (_has_bits_[0] & 0x00000008u) != 0;
}
inline void SalePrice::set_has_payinfo() {
  _has_bits_[0] |= 0x00000008u;
}
inline void SalePrice::clear_has_payinfo() {
  _has_bits_[0] &= ~0x00000008u;
}
inline void SalePrice::clear_payinfo() {
  if (payinfo_ != NULL) payinfo_->::ts::PayInfo::Clear();
  clear_has_payinfo();
}
inline const ::ts::PayInfo& SalePrice::payinfo() const {
  return payinfo_ != NULL ? *payinfo_ : *default_instance_->payinfo_;
}
inline ::ts::PayInfo* SalePrice::mutable_payinfo() {
  set_has_payinfo();
  if (payinfo_ == NULL) payinfo_ = new ::ts::PayInfo;
  return payinfo_;
}
inline ::ts::PayInfo* SalePrice::release_payinfo() {
  clear_has_payinfo();
  ::ts::PayInfo* temp = payinfo_;
  payinfo_ = NULL;
  return temp;
}
inline void SalePrice::set_allocated_payinfo(::ts::PayInfo* payinfo) {
  delete payinfo_;
  payinfo_ = payinfo;
  if (payinfo) {
    set_has_payinfo();
  } else {
    clear_has_payinfo();
  }
}

// repeated .ts.ClientInfo client_list = 5;
inline int SalePrice::client_list_size() const {
  return client_list_.size();
}
inline void SalePrice::clear_client_list() {
  client_list_.Clear();
}
inline const ::ts::ClientInfo& SalePrice::client_list(int index) const {
  return client_list_.Get(index);
}
inline ::ts::ClientInfo* SalePrice::mutable_client_list(int index) {
  return client_list_.Mutable(index);
}
inline ::ts::ClientInfo* SalePrice::add_client_list() {
  return client_list_.Add();
}
inline const ::google::protobuf::RepeatedPtrField< ::ts::ClientInfo >&
SalePrice::client_list() const {
  return client_list_;
}
inline ::google::protobuf::RepeatedPtrField< ::ts::ClientInfo >*
SalePrice::mutable_client_list() {
  return &client_list_;
}

// optional .ts.ProfitInfo profitinfo = 6;
inline bool SalePrice::has_profitinfo() const {
  return (_has_bits_[0] & 0x00000020u) != 0;
}
inline void SalePrice::set_has_profitinfo() {
  _has_bits_[0] |= 0x00000020u;
}
inline void SalePrice::clear_has_profitinfo() {
  _has_bits_[0] &= ~0x00000020u;
}
inline void SalePrice::clear_profitinfo() {
  if (profitinfo_ != NULL) profitinfo_->::ts::ProfitInfo::Clear();
  clear_has_profitinfo();
}
inline const ::ts::ProfitInfo& SalePrice::profitinfo() const {
  return profitinfo_ != NULL ? *profitinfo_ : *default_instance_->profitinfo_;
}
inline ::ts::ProfitInfo* SalePrice::mutable_profitinfo() {
  set_has_profitinfo();
  if (profitinfo_ == NULL) profitinfo_ = new ::ts::ProfitInfo;
  return profitinfo_;
}
inline ::ts::ProfitInfo* SalePrice::release_profitinfo() {
  clear_has_profitinfo();
  ::ts::ProfitInfo* temp = profitinfo_;
  profitinfo_ = NULL;
  return temp;
}
inline void SalePrice::set_allocated_profitinfo(::ts::ProfitInfo* profitinfo) {
  delete profitinfo_;
  profitinfo_ = profitinfo;
  if (profitinfo) {
    set_has_profitinfo();
  } else {
    clear_has_profitinfo();
  }
}

// -------------------------------------------------------------------

// SalePriceAns

// required .ts.ServiceHead head = 1;
inline bool SalePriceAns::has_head() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void SalePriceAns::set_has_head() {
  _has_bits_[0] |= 0x00000001u;
}
inline void SalePriceAns::clear_has_head() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void SalePriceAns::clear_head() {
  if (head_ != NULL) head_->::ts::ServiceHead::Clear();
  clear_has_head();
}
inline const ::ts::ServiceHead& SalePriceAns::head() const {
  return head_ != NULL ? *head_ : *default_instance_->head_;
}
inline ::ts::ServiceHead* SalePriceAns::mutable_head() {
  set_has_head();
  if (head_ == NULL) head_ = new ::ts::ServiceHead;
  return head_;
}
inline ::ts::ServiceHead* SalePriceAns::release_head() {
  clear_has_head();
  ::ts::ServiceHead* temp = head_;
  head_ = NULL;
  return temp;
}
inline void SalePriceAns::set_allocated_head(::ts::ServiceHead* head) {
  delete head_;
  head_ = head;
  if (head) {
    set_has_head();
  } else {
    clear_has_head();
  }
}

// optional .ts.ClientInfo client = 2;
inline bool SalePriceAns::has_client() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void SalePriceAns::set_has_client() {
  _has_bits_[0] |= 0x00000002u;
}
inline void SalePriceAns::clear_has_client() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void SalePriceAns::clear_client() {
  if (client_ != NULL) client_->::ts::ClientInfo::Clear();
  clear_has_client();
}
inline const ::ts::ClientInfo& SalePriceAns::client() const {
  return client_ != NULL ? *client_ : *default_instance_->client_;
}
inline ::ts::ClientInfo* SalePriceAns::mutable_client() {
  set_has_client();
  if (client_ == NULL) client_ = new ::ts::ClientInfo;
  return client_;
}
inline ::ts::ClientInfo* SalePriceAns::release_client() {
  clear_has_client();
  ::ts::ClientInfo* temp = client_;
  client_ = NULL;
  return temp;
}
inline void SalePriceAns::set_allocated_client(::ts::ClientInfo* client) {
  delete client_;
  client_ = client;
  if (client) {
    set_has_client();
  } else {
    clear_has_client();
  }
}

// optional .ts.ProductInfo product = 3;
inline bool SalePriceAns::has_product() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void SalePriceAns::set_has_product() {
  _has_bits_[0] |= 0x00000004u;
}
inline void SalePriceAns::clear_has_product() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void SalePriceAns::clear_product() {
  if (product_ != NULL) product_->::ts::ProductInfo::Clear();
  clear_has_product();
}
inline const ::ts::ProductInfo& SalePriceAns::product() const {
  return product_ != NULL ? *product_ : *default_instance_->product_;
}
inline ::ts::ProductInfo* SalePriceAns::mutable_product() {
  set_has_product();
  if (product_ == NULL) product_ = new ::ts::ProductInfo;
  return product_;
}
inline ::ts::ProductInfo* SalePriceAns::release_product() {
  clear_has_product();
  ::ts::ProductInfo* temp = product_;
  product_ = NULL;
  return temp;
}
inline void SalePriceAns::set_allocated_product(::ts::ProductInfo* product) {
  delete product_;
  product_ = product;
  if (product) {
    set_has_product();
  } else {
    clear_has_product();
  }
}

// optional .ts.PayInfo payinfo = 4;
inline bool SalePriceAns::has_payinfo() const {
  return (_has_bits_[0] & 0x00000008u) != 0;
}
inline void SalePriceAns::set_has_payinfo() {
  _has_bits_[0] |= 0x00000008u;
}
inline void SalePriceAns::clear_has_payinfo() {
  _has_bits_[0] &= ~0x00000008u;
}
inline void SalePriceAns::clear_payinfo() {
  if (payinfo_ != NULL) payinfo_->::ts::PayInfo::Clear();
  clear_has_payinfo();
}
inline const ::ts::PayInfo& SalePriceAns::payinfo() const {
  return payinfo_ != NULL ? *payinfo_ : *default_instance_->payinfo_;
}
inline ::ts::PayInfo* SalePriceAns::mutable_payinfo() {
  set_has_payinfo();
  if (payinfo_ == NULL) payinfo_ = new ::ts::PayInfo;
  return payinfo_;
}
inline ::ts::PayInfo* SalePriceAns::release_payinfo() {
  clear_has_payinfo();
  ::ts::PayInfo* temp = payinfo_;
  payinfo_ = NULL;
  return temp;
}
inline void SalePriceAns::set_allocated_payinfo(::ts::PayInfo* payinfo) {
  delete payinfo_;
  payinfo_ = payinfo;
  if (payinfo) {
    set_has_payinfo();
  } else {
    clear_has_payinfo();
  }
}

// optional .ts.ProfitInfo profitinfo = 5;
inline bool SalePriceAns::has_profitinfo() const {
  return (_has_bits_[0] & 0x00000010u) != 0;
}
inline void SalePriceAns::set_has_profitinfo() {
  _has_bits_[0] |= 0x00000010u;
}
inline void SalePriceAns::clear_has_profitinfo() {
  _has_bits_[0] &= ~0x00000010u;
}
inline void SalePriceAns::clear_profitinfo() {
  if (profitinfo_ != NULL) profitinfo_->::ts::ProfitInfo::Clear();
  clear_has_profitinfo();
}
inline const ::ts::ProfitInfo& SalePriceAns::profitinfo() const {
  return profitinfo_ != NULL ? *profitinfo_ : *default_instance_->profitinfo_;
}
inline ::ts::ProfitInfo* SalePriceAns::mutable_profitinfo() {
  set_has_profitinfo();
  if (profitinfo_ == NULL) profitinfo_ = new ::ts::ProfitInfo;
  return profitinfo_;
}
inline ::ts::ProfitInfo* SalePriceAns::release_profitinfo() {
  clear_has_profitinfo();
  ::ts::ProfitInfo* temp = profitinfo_;
  profitinfo_ = NULL;
  return temp;
}
inline void SalePriceAns::set_allocated_profitinfo(::ts::ProfitInfo* profitinfo) {
  delete profitinfo_;
  profitinfo_ = profitinfo;
  if (profitinfo) {
    set_has_profitinfo();
  } else {
    clear_has_profitinfo();
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

#endif  // PROTOBUF_saleprice_2eproto__INCLUDED
