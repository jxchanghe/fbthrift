#
# Autogenerated by Thrift
#
# DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
#  @generated
#

from cpython.ref cimport PyObject
from libc.stdint cimport int8_t, int16_t, int32_t, int64_t
from libcpp cimport bool as cbool
from libcpp.map cimport map as cmap, pair as cpair
from libcpp.memory cimport shared_ptr, unique_ptr
from libcpp.set cimport set as cset
from libcpp.string cimport string
from libcpp.vector cimport vector

from thrift.py3.client cimport cTClientBase
from thrift.py3.folly cimport cFollyEventBase, cFollyTry, cFollyUnit

cimport my.namespacing.test.module.module.types


cdef extern from "src/gen-cpp2/TestService.h" namespace "cpp2":
  cdef cppclass cTestServiceAsyncClient "cpp2::TestServiceAsyncClient":
      pass

cdef extern from "<utility>" namespace "std":
  cdef unique_ptr[cTestServiceClientWrapper] move(unique_ptr[cTestServiceClientWrapper])

cdef extern from "src/gen-py3/module/clients_wrapper.h" namespace "cpp2":
  cdef cppclass cTestServiceClientWrapper "cpp2::TestServiceClientWrapper":
    cTestServiceClientWrapper(
      shared_ptr[cTestServiceAsyncClient] async_client,
      shared_ptr[cFollyEventBase] event_base)
    void init(
      int64_t arg_int1,
      void (*callback) (PyObject*, cFollyTry[int64_t]),
      object py_future)
