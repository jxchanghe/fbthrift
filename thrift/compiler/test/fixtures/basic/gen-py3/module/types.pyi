#
# Autogenerated by Thrift
#
# DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
#  @generated
#

import thrift.py3.types
import thrift.py3.exceptions
from thrift.py3.types import NOTSET, NOTSETTYPE
from thrift.py3.serializer import Protocol
import typing as _typing

import sys
import itertools
import enum as __enum


class MyEnum(__enum.Enum, _typing.SupportsInt):
    MyValue1 = ...
    MyValue2 = ...
    value: int
    def __int__(self) -> int: ...


class MyStruct(thrift.py3.types.Struct, _typing.Hashable, _typing.Iterable[_typing.Tuple[str, _typing.Any]]):
    def __init__(
        self, *,
        MyIntField: _typing.Optional[int]=None,
        MyStringField: _typing.Optional[str]=None,
        MyDataField: _typing.Optional['MyDataItem']=None,
        major: _typing.Optional[int]=None
    ) -> None: ...

    def __call__(
        self, *,
        MyIntField: _typing.Union[int, NOTSETTYPE, None]=NOTSET,
        MyStringField: _typing.Union[str, NOTSETTYPE, None]=NOTSET,
        MyDataField: _typing.Union['MyDataItem', NOTSETTYPE, None]=NOTSET,
        major: _typing.Union[int, NOTSETTYPE, None]=NOTSET
    ) -> MyStruct: ...

    def __reduce__(self) -> _typing.Tuple[_typing.Callable, _typing.Tuple[_typing.Type['MyStruct'], bytes]]: ...
    def __iter__(self) -> _typing.Iterator[_typing.Tuple[str, _typing.Any]]: ...
    def __bool__(self) -> bool: ...
    def __hash__(self) -> int: ...
    def __repr__(self) -> str: ...
    def __lt__(self, other: 'MyStruct') -> bool: ...

    @property
    def MyIntField(self) -> int: ...
    @property
    def MyStringField(self) -> str: ...
    @property
    def MyDataField(self) -> 'MyDataItem': ...
    @property
    def major(self) -> int: ...


class MyDataItem(thrift.py3.types.Struct, _typing.Hashable, _typing.Iterable[_typing.Tuple[str, _typing.Any]]):
    def __init__(
        self, 
    ) -> None: ...

    def __call__(
        self, 
    ) -> MyDataItem: ...

    def __reduce__(self) -> _typing.Tuple[_typing.Callable, _typing.Tuple[_typing.Type['MyDataItem'], bytes]]: ...
    def __iter__(self) -> _typing.Iterator[_typing.Tuple[str, _typing.Any]]: ...
    def __bool__(self) -> bool: ...
    def __hash__(self) -> int: ...
    def __repr__(self) -> str: ...
    def __lt__(self, other: 'MyDataItem') -> bool: ...



