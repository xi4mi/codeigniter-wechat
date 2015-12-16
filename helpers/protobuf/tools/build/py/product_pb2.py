# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: product.proto

from google.protobuf import descriptor as _descriptor
from google.protobuf import message as _message
from google.protobuf import reflection as _reflection
from google.protobuf import descriptor_pb2
# @@protoc_insertion_point(imports)




DESCRIPTOR = _descriptor.FileDescriptor(
  name='product.proto',
  package='ts',
  serialized_pb='\n\rproduct.proto\x12\x02ts\"*\n\x0cProductParam\x12\x0b\n\x03key\x18\x01 \x02(\t\x12\r\n\x05value\x18\x02 \x02(\t\"\xcf\x01\n\x0bProductInfo\x12\x10\n\x08playerid\x18\x01 \x02(\t\x12\x11\n\tproductid\x18\x02 \x02(\t\x12\x13\n\x0bproducttype\x18\x03 \x01(\t\x12\r\n\x05mchid\x18\x04 \x01(\t\x12\x0b\n\x03key\x18\x05 \x01(\t\x12\x14\n\x0cproductprice\x18\x06 \x01(\x01\x12\x12\n\nproductnum\x18\x07 \x01(\x05\x12\x14\n\x0cproducttmpid\x18\x08 \x01(\x05\x12*\n\x10productparamlist\x18\t \x03(\x0b\x32\x10.ts.ProductParam')




_PRODUCTPARAM = _descriptor.Descriptor(
  name='ProductParam',
  full_name='ts.ProductParam',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='key', full_name='ts.ProductParam.key', index=0,
      number=1, type=9, cpp_type=9, label=2,
      has_default_value=False, default_value=unicode("", "utf-8"),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='value', full_name='ts.ProductParam.value', index=1,
      number=2, type=9, cpp_type=9, label=2,
      has_default_value=False, default_value=unicode("", "utf-8"),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  options=None,
  is_extendable=False,
  extension_ranges=[],
  serialized_start=21,
  serialized_end=63,
)


_PRODUCTINFO = _descriptor.Descriptor(
  name='ProductInfo',
  full_name='ts.ProductInfo',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='playerid', full_name='ts.ProductInfo.playerid', index=0,
      number=1, type=9, cpp_type=9, label=2,
      has_default_value=False, default_value=unicode("", "utf-8"),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='productid', full_name='ts.ProductInfo.productid', index=1,
      number=2, type=9, cpp_type=9, label=2,
      has_default_value=False, default_value=unicode("", "utf-8"),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='producttype', full_name='ts.ProductInfo.producttype', index=2,
      number=3, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=unicode("", "utf-8"),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='mchid', full_name='ts.ProductInfo.mchid', index=3,
      number=4, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=unicode("", "utf-8"),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='key', full_name='ts.ProductInfo.key', index=4,
      number=5, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=unicode("", "utf-8"),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='productprice', full_name='ts.ProductInfo.productprice', index=5,
      number=6, type=1, cpp_type=5, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='productnum', full_name='ts.ProductInfo.productnum', index=6,
      number=7, type=5, cpp_type=1, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='producttmpid', full_name='ts.ProductInfo.producttmpid', index=7,
      number=8, type=5, cpp_type=1, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
    _descriptor.FieldDescriptor(
      name='productparamlist', full_name='ts.ProductInfo.productparamlist', index=8,
      number=9, type=11, cpp_type=10, label=3,
      has_default_value=False, default_value=[],
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  options=None,
  is_extendable=False,
  extension_ranges=[],
  serialized_start=66,
  serialized_end=273,
)

_PRODUCTINFO.fields_by_name['productparamlist'].message_type = _PRODUCTPARAM
DESCRIPTOR.message_types_by_name['ProductParam'] = _PRODUCTPARAM
DESCRIPTOR.message_types_by_name['ProductInfo'] = _PRODUCTINFO

class ProductParam(_message.Message):
  __metaclass__ = _reflection.GeneratedProtocolMessageType
  DESCRIPTOR = _PRODUCTPARAM

  # @@protoc_insertion_point(class_scope:ts.ProductParam)

class ProductInfo(_message.Message):
  __metaclass__ = _reflection.GeneratedProtocolMessageType
  DESCRIPTOR = _PRODUCTINFO

  # @@protoc_insertion_point(class_scope:ts.ProductInfo)


# @@protoc_insertion_point(module_scope)