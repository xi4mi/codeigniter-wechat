// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: product.proto

#ifndef PROTOBUF_product_2eproto__INCLUDED
#define PROTOBUF_product_2eproto__INCLUDED

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
// @@protoc_insertion_point(includes)

namespace ts {

// Internal implementation detail -- do not call these.
void  protobuf_AddDesc_product_2eproto();
void protobuf_AssignDesc_product_2eproto();
void protobuf_ShutdownFile_product_2eproto();

class ProductParam;
class ProductInfo;

// ===================================================================

class ProductParam : public ::google::protobuf::Message {
 public:
  ProductParam();
  virtual ~ProductParam();

  ProductParam(const ProductParam& from);

  inline ProductParam& operator=(const ProductParam& from) {
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
  static const ProductParam& default_instance();

  void Swap(ProductParam* other);

  // implements Message ----------------------------------------------

  ProductParam* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const ProductParam& from);
  void MergeFrom(const ProductParam& from);
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

  // required string key = 1;
  inline bool has_key() const;
  inline void clear_key();
  static const int kKeyFieldNumber = 1;
  inline const ::std::string& key() const;
  inline void set_key(const ::std::string& value);
  inline void set_key(const char* value);
  inline void set_key(const char* value, size_t size);
  inline ::std::string* mutable_key();
  inline ::std::string* release_key();
  inline void set_allocated_key(::std::string* key);

  // required string value = 2;
  inline bool has_value() const;
  inline void clear_value();
  static const int kValueFieldNumber = 2;
  inline const ::std::string& value() const;
  inline void set_value(const ::std::string& value);
  inline void set_value(const char* value);
  inline void set_value(const char* value, size_t size);
  inline ::std::string* mutable_value();
  inline ::std::string* release_value();
  inline void set_allocated_value(::std::string* value);

  // @@protoc_insertion_point(class_scope:ts.ProductParam)
 private:
  inline void set_has_key();
  inline void clear_has_key();
  inline void set_has_value();
  inline void clear_has_value();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::std::string* key_;
  ::std::string* value_;

  mutable int _cached_size_;
  ::google::protobuf::uint32 _has_bits_[(2 + 31) / 32];

  friend void  protobuf_AddDesc_product_2eproto();
  friend void protobuf_AssignDesc_product_2eproto();
  friend void protobuf_ShutdownFile_product_2eproto();

  void InitAsDefaultInstance();
  static ProductParam* default_instance_;
};
// -------------------------------------------------------------------

class ProductInfo : public ::google::protobuf::Message {
 public:
  ProductInfo();
  virtual ~ProductInfo();

  ProductInfo(const ProductInfo& from);

  inline ProductInfo& operator=(const ProductInfo& from) {
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
  static const ProductInfo& default_instance();

  void Swap(ProductInfo* other);

  // implements Message ----------------------------------------------

  ProductInfo* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const ProductInfo& from);
  void MergeFrom(const ProductInfo& from);
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

  // required string playerid = 1;
  inline bool has_playerid() const;
  inline void clear_playerid();
  static const int kPlayeridFieldNumber = 1;
  inline const ::std::string& playerid() const;
  inline void set_playerid(const ::std::string& value);
  inline void set_playerid(const char* value);
  inline void set_playerid(const char* value, size_t size);
  inline ::std::string* mutable_playerid();
  inline ::std::string* release_playerid();
  inline void set_allocated_playerid(::std::string* playerid);

  // required string productid = 2;
  inline bool has_productid() const;
  inline void clear_productid();
  static const int kProductidFieldNumber = 2;
  inline const ::std::string& productid() const;
  inline void set_productid(const ::std::string& value);
  inline void set_productid(const char* value);
  inline void set_productid(const char* value, size_t size);
  inline ::std::string* mutable_productid();
  inline ::std::string* release_productid();
  inline void set_allocated_productid(::std::string* productid);

  // optional string producttype = 3;
  inline bool has_producttype() const;
  inline void clear_producttype();
  static const int kProducttypeFieldNumber = 3;
  inline const ::std::string& producttype() const;
  inline void set_producttype(const ::std::string& value);
  inline void set_producttype(const char* value);
  inline void set_producttype(const char* value, size_t size);
  inline ::std::string* mutable_producttype();
  inline ::std::string* release_producttype();
  inline void set_allocated_producttype(::std::string* producttype);

  // optional string mchid = 4;
  inline bool has_mchid() const;
  inline void clear_mchid();
  static const int kMchidFieldNumber = 4;
  inline const ::std::string& mchid() const;
  inline void set_mchid(const ::std::string& value);
  inline void set_mchid(const char* value);
  inline void set_mchid(const char* value, size_t size);
  inline ::std::string* mutable_mchid();
  inline ::std::string* release_mchid();
  inline void set_allocated_mchid(::std::string* mchid);

  // optional string key = 5;
  inline bool has_key() const;
  inline void clear_key();
  static const int kKeyFieldNumber = 5;
  inline const ::std::string& key() const;
  inline void set_key(const ::std::string& value);
  inline void set_key(const char* value);
  inline void set_key(const char* value, size_t size);
  inline ::std::string* mutable_key();
  inline ::std::string* release_key();
  inline void set_allocated_key(::std::string* key);

  // optional double productprice = 6;
  inline bool has_productprice() const;
  inline void clear_productprice();
  static const int kProductpriceFieldNumber = 6;
  inline double productprice() const;
  inline void set_productprice(double value);

  // optional int32 productnum = 7;
  inline bool has_productnum() const;
  inline void clear_productnum();
  static const int kProductnumFieldNumber = 7;
  inline ::google::protobuf::int32 productnum() const;
  inline void set_productnum(::google::protobuf::int32 value);

  // optional int32 producttmpid = 8;
  inline bool has_producttmpid() const;
  inline void clear_producttmpid();
  static const int kProducttmpidFieldNumber = 8;
  inline ::google::protobuf::int32 producttmpid() const;
  inline void set_producttmpid(::google::protobuf::int32 value);

  // repeated .ts.ProductParam productparamlist = 9;
  inline int productparamlist_size() const;
  inline void clear_productparamlist();
  static const int kProductparamlistFieldNumber = 9;
  inline const ::ts::ProductParam& productparamlist(int index) const;
  inline ::ts::ProductParam* mutable_productparamlist(int index);
  inline ::ts::ProductParam* add_productparamlist();
  inline const ::google::protobuf::RepeatedPtrField< ::ts::ProductParam >&
      productparamlist() const;
  inline ::google::protobuf::RepeatedPtrField< ::ts::ProductParam >*
      mutable_productparamlist();

  // @@protoc_insertion_point(class_scope:ts.ProductInfo)
 private:
  inline void set_has_playerid();
  inline void clear_has_playerid();
  inline void set_has_productid();
  inline void clear_has_productid();
  inline void set_has_producttype();
  inline void clear_has_producttype();
  inline void set_has_mchid();
  inline void clear_has_mchid();
  inline void set_has_key();
  inline void clear_has_key();
  inline void set_has_productprice();
  inline void clear_has_productprice();
  inline void set_has_productnum();
  inline void clear_has_productnum();
  inline void set_has_producttmpid();
  inline void clear_has_producttmpid();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::std::string* playerid_;
  ::std::string* productid_;
  ::std::string* producttype_;
  ::std::string* mchid_;
  ::std::string* key_;
  double productprice_;
  ::google::protobuf::int32 productnum_;
  ::google::protobuf::int32 producttmpid_;
  ::google::protobuf::RepeatedPtrField< ::ts::ProductParam > productparamlist_;

  mutable int _cached_size_;
  ::google::protobuf::uint32 _has_bits_[(9 + 31) / 32];

  friend void  protobuf_AddDesc_product_2eproto();
  friend void protobuf_AssignDesc_product_2eproto();
  friend void protobuf_ShutdownFile_product_2eproto();

  void InitAsDefaultInstance();
  static ProductInfo* default_instance_;
};
// ===================================================================


// ===================================================================

// ProductParam

// required string key = 1;
inline bool ProductParam::has_key() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void ProductParam::set_has_key() {
  _has_bits_[0] |= 0x00000001u;
}
inline void ProductParam::clear_has_key() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void ProductParam::clear_key() {
  if (key_ != &::google::protobuf::internal::kEmptyString) {
    key_->clear();
  }
  clear_has_key();
}
inline const ::std::string& ProductParam::key() const {
  return *key_;
}
inline void ProductParam::set_key(const ::std::string& value) {
  set_has_key();
  if (key_ == &::google::protobuf::internal::kEmptyString) {
    key_ = new ::std::string;
  }
  key_->assign(value);
}
inline void ProductParam::set_key(const char* value) {
  set_has_key();
  if (key_ == &::google::protobuf::internal::kEmptyString) {
    key_ = new ::std::string;
  }
  key_->assign(value);
}
inline void ProductParam::set_key(const char* value, size_t size) {
  set_has_key();
  if (key_ == &::google::protobuf::internal::kEmptyString) {
    key_ = new ::std::string;
  }
  key_->assign(reinterpret_cast<const char*>(value), size);
}
inline ::std::string* ProductParam::mutable_key() {
  set_has_key();
  if (key_ == &::google::protobuf::internal::kEmptyString) {
    key_ = new ::std::string;
  }
  return key_;
}
inline ::std::string* ProductParam::release_key() {
  clear_has_key();
  if (key_ == &::google::protobuf::internal::kEmptyString) {
    return NULL;
  } else {
    ::std::string* temp = key_;
    key_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
    return temp;
  }
}
inline void ProductParam::set_allocated_key(::std::string* key) {
  if (key_ != &::google::protobuf::internal::kEmptyString) {
    delete key_;
  }
  if (key) {
    set_has_key();
    key_ = key;
  } else {
    clear_has_key();
    key_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  }
}

// required string value = 2;
inline bool ProductParam::has_value() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void ProductParam::set_has_value() {
  _has_bits_[0] |= 0x00000002u;
}
inline void ProductParam::clear_has_value() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void ProductParam::clear_value() {
  if (value_ != &::google::protobuf::internal::kEmptyString) {
    value_->clear();
  }
  clear_has_value();
}
inline const ::std::string& ProductParam::value() const {
  return *value_;
}
inline void ProductParam::set_value(const ::std::string& value) {
  set_has_value();
  if (value_ == &::google::protobuf::internal::kEmptyString) {
    value_ = new ::std::string;
  }
  value_->assign(value);
}
inline void ProductParam::set_value(const char* value) {
  set_has_value();
  if (value_ == &::google::protobuf::internal::kEmptyString) {
    value_ = new ::std::string;
  }
  value_->assign(value);
}
inline void ProductParam::set_value(const char* value, size_t size) {
  set_has_value();
  if (value_ == &::google::protobuf::internal::kEmptyString) {
    value_ = new ::std::string;
  }
  value_->assign(reinterpret_cast<const char*>(value), size);
}
inline ::std::string* ProductParam::mutable_value() {
  set_has_value();
  if (value_ == &::google::protobuf::internal::kEmptyString) {
    value_ = new ::std::string;
  }
  return value_;
}
inline ::std::string* ProductParam::release_value() {
  clear_has_value();
  if (value_ == &::google::protobuf::internal::kEmptyString) {
    return NULL;
  } else {
    ::std::string* temp = value_;
    value_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
    return temp;
  }
}
inline void ProductParam::set_allocated_value(::std::string* value) {
  if (value_ != &::google::protobuf::internal::kEmptyString) {
    delete value_;
  }
  if (value) {
    set_has_value();
    value_ = value;
  } else {
    clear_has_value();
    value_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  }
}

// -------------------------------------------------------------------

// ProductInfo

// required string playerid = 1;
inline bool ProductInfo::has_playerid() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void ProductInfo::set_has_playerid() {
  _has_bits_[0] |= 0x00000001u;
}
inline void ProductInfo::clear_has_playerid() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void ProductInfo::clear_playerid() {
  if (playerid_ != &::google::protobuf::internal::kEmptyString) {
    playerid_->clear();
  }
  clear_has_playerid();
}
inline const ::std::string& ProductInfo::playerid() const {
  return *playerid_;
}
inline void ProductInfo::set_playerid(const ::std::string& value) {
  set_has_playerid();
  if (playerid_ == &::google::protobuf::internal::kEmptyString) {
    playerid_ = new ::std::string;
  }
  playerid_->assign(value);
}
inline void ProductInfo::set_playerid(const char* value) {
  set_has_playerid();
  if (playerid_ == &::google::protobuf::internal::kEmptyString) {
    playerid_ = new ::std::string;
  }
  playerid_->assign(value);
}
inline void ProductInfo::set_playerid(const char* value, size_t size) {
  set_has_playerid();
  if (playerid_ == &::google::protobuf::internal::kEmptyString) {
    playerid_ = new ::std::string;
  }
  playerid_->assign(reinterpret_cast<const char*>(value), size);
}
inline ::std::string* ProductInfo::mutable_playerid() {
  set_has_playerid();
  if (playerid_ == &::google::protobuf::internal::kEmptyString) {
    playerid_ = new ::std::string;
  }
  return playerid_;
}
inline ::std::string* ProductInfo::release_playerid() {
  clear_has_playerid();
  if (playerid_ == &::google::protobuf::internal::kEmptyString) {
    return NULL;
  } else {
    ::std::string* temp = playerid_;
    playerid_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
    return temp;
  }
}
inline void ProductInfo::set_allocated_playerid(::std::string* playerid) {
  if (playerid_ != &::google::protobuf::internal::kEmptyString) {
    delete playerid_;
  }
  if (playerid) {
    set_has_playerid();
    playerid_ = playerid;
  } else {
    clear_has_playerid();
    playerid_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  }
}

// required string productid = 2;
inline bool ProductInfo::has_productid() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void ProductInfo::set_has_productid() {
  _has_bits_[0] |= 0x00000002u;
}
inline void ProductInfo::clear_has_productid() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void ProductInfo::clear_productid() {
  if (productid_ != &::google::protobuf::internal::kEmptyString) {
    productid_->clear();
  }
  clear_has_productid();
}
inline const ::std::string& ProductInfo::productid() const {
  return *productid_;
}
inline void ProductInfo::set_productid(const ::std::string& value) {
  set_has_productid();
  if (productid_ == &::google::protobuf::internal::kEmptyString) {
    productid_ = new ::std::string;
  }
  productid_->assign(value);
}
inline void ProductInfo::set_productid(const char* value) {
  set_has_productid();
  if (productid_ == &::google::protobuf::internal::kEmptyString) {
    productid_ = new ::std::string;
  }
  productid_->assign(value);
}
inline void ProductInfo::set_productid(const char* value, size_t size) {
  set_has_productid();
  if (productid_ == &::google::protobuf::internal::kEmptyString) {
    productid_ = new ::std::string;
  }
  productid_->assign(reinterpret_cast<const char*>(value), size);
}
inline ::std::string* ProductInfo::mutable_productid() {
  set_has_productid();
  if (productid_ == &::google::protobuf::internal::kEmptyString) {
    productid_ = new ::std::string;
  }
  return productid_;
}
inline ::std::string* ProductInfo::release_productid() {
  clear_has_productid();
  if (productid_ == &::google::protobuf::internal::kEmptyString) {
    return NULL;
  } else {
    ::std::string* temp = productid_;
    productid_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
    return temp;
  }
}
inline void ProductInfo::set_allocated_productid(::std::string* productid) {
  if (productid_ != &::google::protobuf::internal::kEmptyString) {
    delete productid_;
  }
  if (productid) {
    set_has_productid();
    productid_ = productid;
  } else {
    clear_has_productid();
    productid_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  }
}

// optional string producttype = 3;
inline bool ProductInfo::has_producttype() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void ProductInfo::set_has_producttype() {
  _has_bits_[0] |= 0x00000004u;
}
inline void ProductInfo::clear_has_producttype() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void ProductInfo::clear_producttype() {
  if (producttype_ != &::google::protobuf::internal::kEmptyString) {
    producttype_->clear();
  }
  clear_has_producttype();
}
inline const ::std::string& ProductInfo::producttype() const {
  return *producttype_;
}
inline void ProductInfo::set_producttype(const ::std::string& value) {
  set_has_producttype();
  if (producttype_ == &::google::protobuf::internal::kEmptyString) {
    producttype_ = new ::std::string;
  }
  producttype_->assign(value);
}
inline void ProductInfo::set_producttype(const char* value) {
  set_has_producttype();
  if (producttype_ == &::google::protobuf::internal::kEmptyString) {
    producttype_ = new ::std::string;
  }
  producttype_->assign(value);
}
inline void ProductInfo::set_producttype(const char* value, size_t size) {
  set_has_producttype();
  if (producttype_ == &::google::protobuf::internal::kEmptyString) {
    producttype_ = new ::std::string;
  }
  producttype_->assign(reinterpret_cast<const char*>(value), size);
}
inline ::std::string* ProductInfo::mutable_producttype() {
  set_has_producttype();
  if (producttype_ == &::google::protobuf::internal::kEmptyString) {
    producttype_ = new ::std::string;
  }
  return producttype_;
}
inline ::std::string* ProductInfo::release_producttype() {
  clear_has_producttype();
  if (producttype_ == &::google::protobuf::internal::kEmptyString) {
    return NULL;
  } else {
    ::std::string* temp = producttype_;
    producttype_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
    return temp;
  }
}
inline void ProductInfo::set_allocated_producttype(::std::string* producttype) {
  if (producttype_ != &::google::protobuf::internal::kEmptyString) {
    delete producttype_;
  }
  if (producttype) {
    set_has_producttype();
    producttype_ = producttype;
  } else {
    clear_has_producttype();
    producttype_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  }
}

// optional string mchid = 4;
inline bool ProductInfo::has_mchid() const {
  return (_has_bits_[0] & 0x00000008u) != 0;
}
inline void ProductInfo::set_has_mchid() {
  _has_bits_[0] |= 0x00000008u;
}
inline void ProductInfo::clear_has_mchid() {
  _has_bits_[0] &= ~0x00000008u;
}
inline void ProductInfo::clear_mchid() {
  if (mchid_ != &::google::protobuf::internal::kEmptyString) {
    mchid_->clear();
  }
  clear_has_mchid();
}
inline const ::std::string& ProductInfo::mchid() const {
  return *mchid_;
}
inline void ProductInfo::set_mchid(const ::std::string& value) {
  set_has_mchid();
  if (mchid_ == &::google::protobuf::internal::kEmptyString) {
    mchid_ = new ::std::string;
  }
  mchid_->assign(value);
}
inline void ProductInfo::set_mchid(const char* value) {
  set_has_mchid();
  if (mchid_ == &::google::protobuf::internal::kEmptyString) {
    mchid_ = new ::std::string;
  }
  mchid_->assign(value);
}
inline void ProductInfo::set_mchid(const char* value, size_t size) {
  set_has_mchid();
  if (mchid_ == &::google::protobuf::internal::kEmptyString) {
    mchid_ = new ::std::string;
  }
  mchid_->assign(reinterpret_cast<const char*>(value), size);
}
inline ::std::string* ProductInfo::mutable_mchid() {
  set_has_mchid();
  if (mchid_ == &::google::protobuf::internal::kEmptyString) {
    mchid_ = new ::std::string;
  }
  return mchid_;
}
inline ::std::string* ProductInfo::release_mchid() {
  clear_has_mchid();
  if (mchid_ == &::google::protobuf::internal::kEmptyString) {
    return NULL;
  } else {
    ::std::string* temp = mchid_;
    mchid_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
    return temp;
  }
}
inline void ProductInfo::set_allocated_mchid(::std::string* mchid) {
  if (mchid_ != &::google::protobuf::internal::kEmptyString) {
    delete mchid_;
  }
  if (mchid) {
    set_has_mchid();
    mchid_ = mchid;
  } else {
    clear_has_mchid();
    mchid_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  }
}

// optional string key = 5;
inline bool ProductInfo::has_key() const {
  return (_has_bits_[0] & 0x00000010u) != 0;
}
inline void ProductInfo::set_has_key() {
  _has_bits_[0] |= 0x00000010u;
}
inline void ProductInfo::clear_has_key() {
  _has_bits_[0] &= ~0x00000010u;
}
inline void ProductInfo::clear_key() {
  if (key_ != &::google::protobuf::internal::kEmptyString) {
    key_->clear();
  }
  clear_has_key();
}
inline const ::std::string& ProductInfo::key() const {
  return *key_;
}
inline void ProductInfo::set_key(const ::std::string& value) {
  set_has_key();
  if (key_ == &::google::protobuf::internal::kEmptyString) {
    key_ = new ::std::string;
  }
  key_->assign(value);
}
inline void ProductInfo::set_key(const char* value) {
  set_has_key();
  if (key_ == &::google::protobuf::internal::kEmptyString) {
    key_ = new ::std::string;
  }
  key_->assign(value);
}
inline void ProductInfo::set_key(const char* value, size_t size) {
  set_has_key();
  if (key_ == &::google::protobuf::internal::kEmptyString) {
    key_ = new ::std::string;
  }
  key_->assign(reinterpret_cast<const char*>(value), size);
}
inline ::std::string* ProductInfo::mutable_key() {
  set_has_key();
  if (key_ == &::google::protobuf::internal::kEmptyString) {
    key_ = new ::std::string;
  }
  return key_;
}
inline ::std::string* ProductInfo::release_key() {
  clear_has_key();
  if (key_ == &::google::protobuf::internal::kEmptyString) {
    return NULL;
  } else {
    ::std::string* temp = key_;
    key_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
    return temp;
  }
}
inline void ProductInfo::set_allocated_key(::std::string* key) {
  if (key_ != &::google::protobuf::internal::kEmptyString) {
    delete key_;
  }
  if (key) {
    set_has_key();
    key_ = key;
  } else {
    clear_has_key();
    key_ = const_cast< ::std::string*>(&::google::protobuf::internal::kEmptyString);
  }
}

// optional double productprice = 6;
inline bool ProductInfo::has_productprice() const {
  return (_has_bits_[0] & 0x00000020u) != 0;
}
inline void ProductInfo::set_has_productprice() {
  _has_bits_[0] |= 0x00000020u;
}
inline void ProductInfo::clear_has_productprice() {
  _has_bits_[0] &= ~0x00000020u;
}
inline void ProductInfo::clear_productprice() {
  productprice_ = 0;
  clear_has_productprice();
}
inline double ProductInfo::productprice() const {
  return productprice_;
}
inline void ProductInfo::set_productprice(double value) {
  set_has_productprice();
  productprice_ = value;
}

// optional int32 productnum = 7;
inline bool ProductInfo::has_productnum() const {
  return (_has_bits_[0] & 0x00000040u) != 0;
}
inline void ProductInfo::set_has_productnum() {
  _has_bits_[0] |= 0x00000040u;
}
inline void ProductInfo::clear_has_productnum() {
  _has_bits_[0] &= ~0x00000040u;
}
inline void ProductInfo::clear_productnum() {
  productnum_ = 0;
  clear_has_productnum();
}
inline ::google::protobuf::int32 ProductInfo::productnum() const {
  return productnum_;
}
inline void ProductInfo::set_productnum(::google::protobuf::int32 value) {
  set_has_productnum();
  productnum_ = value;
}

// optional int32 producttmpid = 8;
inline bool ProductInfo::has_producttmpid() const {
  return (_has_bits_[0] & 0x00000080u) != 0;
}
inline void ProductInfo::set_has_producttmpid() {
  _has_bits_[0] |= 0x00000080u;
}
inline void ProductInfo::clear_has_producttmpid() {
  _has_bits_[0] &= ~0x00000080u;
}
inline void ProductInfo::clear_producttmpid() {
  producttmpid_ = 0;
  clear_has_producttmpid();
}
inline ::google::protobuf::int32 ProductInfo::producttmpid() const {
  return producttmpid_;
}
inline void ProductInfo::set_producttmpid(::google::protobuf::int32 value) {
  set_has_producttmpid();
  producttmpid_ = value;
}

// repeated .ts.ProductParam productparamlist = 9;
inline int ProductInfo::productparamlist_size() const {
  return productparamlist_.size();
}
inline void ProductInfo::clear_productparamlist() {
  productparamlist_.Clear();
}
inline const ::ts::ProductParam& ProductInfo::productparamlist(int index) const {
  return productparamlist_.Get(index);
}
inline ::ts::ProductParam* ProductInfo::mutable_productparamlist(int index) {
  return productparamlist_.Mutable(index);
}
inline ::ts::ProductParam* ProductInfo::add_productparamlist() {
  return productparamlist_.Add();
}
inline const ::google::protobuf::RepeatedPtrField< ::ts::ProductParam >&
ProductInfo::productparamlist() const {
  return productparamlist_;
}
inline ::google::protobuf::RepeatedPtrField< ::ts::ProductParam >*
ProductInfo::mutable_productparamlist() {
  return &productparamlist_;
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

#endif  // PROTOBUF_product_2eproto__INCLUDED
