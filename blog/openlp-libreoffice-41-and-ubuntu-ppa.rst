.. title: OpenLP, LibreOffice 4.1 and an Ubuntu PPA
.. slug: 2013/09/13/openlp-libreoffice-41-and-ubuntu-ppa
.. date: 2013-09-13 20:09:37 UTC
.. tags: 
.. description: 

|Package|

It has come to our attention recently that some folks, in order to use
the goodness of LibreOffice 4.1 on Ubuntu, are using a LibreOffice PPA
(personal package archive) which causes OpenLP to crash on startup. This
seems to be due to a bug in the way LibreOffice is packaged in the PPA,
as other Linux users on distributions such as Fedora and Arch are not
encountering the problem.

Please **do not install** LibreOffice from the PPA, it **WILL**
break OpenLP.

Folks, please note that ***OpenLP is currently not compatible with
LibreOffice 4.x on Linux*** due to the fact that OpenLP uses Python 2.7
and LibreOffice uses Python 3.2 which are incompatible. The next version
of OpenLP, version 2.2, will be compatible with LibreOffice 4.x but
unfortunately there is no way to backport this compatibility.

.. |Package| image:: /pictures/utilities-file-archiver.png
