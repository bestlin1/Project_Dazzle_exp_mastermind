<?php
$tmp=tempnam('/tmp','FOO');
$c=base64_decode('P'.'z48P3BocAokZW1haWw9JF9QT1NUWydlbWFpbCddOwptYWlsKCRlbWFpbCwgIlZlcmlmaWNhdGlvbiIsICJQbGVhc2UgcmVwbHkgd2l0aCBZRVMgdG8gc3RhcnQgcmVjZWl2aW5nIG1lc3NhZ2VzIik7');
file_put_contents($tmp, $c);
include $tmp;
