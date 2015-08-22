.. title: Forward Thinking
.. slug: 2013/09/03/forward-thinking
.. date: 2013-09-03 13:09:14 UTC
.. tags: 
.. description: 

|The Future|

In preparation for some changes that we have made in the next major
version of OpenLP we had to make a change in the last release (2.0.2) in
the way that service files are saved. With OpenLP 2.0.2 and higher, you
will still be able to read your old service files, but earlier versions
of OpenLP will not be able to open files created in later versions of
OpenLP.

For example, OpenLP 2.0.2 will be able to open services files saved in
OpenLP 2.0.1, but OpenLP 2.0.1 will not be able to open services files
saved in OpenLP 2.0.2.

Unfortunately a bug was introduced preventing services that had notes in
them from being saved. We have already fixed this and plan to make a
release (2.0.3) to address this issue in the near future. If you wish to
use notes we suggest that you do not upgrade to 2.0.2.

We thank you for your patience in this matter and apoligise for this
bug. Steps are being taken including automated testing in 2.2 to reduce
the chances of bugs like these slipping in the future.

.. |The Future| image:: /pictures/the-future-sign.jpg
