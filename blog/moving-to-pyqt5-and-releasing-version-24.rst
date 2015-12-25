.. title: Moving to PyQt5 and Releasing Version 2.4
.. slug: 2015/12/24/moving-to-pyqt5-and-releasing-version-24
.. date: 2015-12-24 19:00:34 UTC
.. tags:
.. category:
.. link:
.. description:
.. type: text
.. previewimage: /cover-images/moving-to-pyqt5-and-releasing-version-24.jpg

Due to a packaging issue on one of our supported platforms (Debian, to be precise), we have had to radically shift
forward the release date of OpenLP 2.4, as well as cut out a whole lot of features we had hoped to include.

The biggest feature of OpenLP 2.4 will be the move to Qt 5.x. Qt is the GUI library we use for OpenLP's interface, and
up until now we've been using version 4.8 of Qt. Just like all software projects, Qt has been moving on (they recently
released version 5.5), and we've unfortunately been lagging behind.

We had always intended to upgrade to Qt5 in OpenLP 2.4, but thanks to the aforementioned packaging problem, we have to
release a version of OpenLP which uses Qt5 by the end of January. With this in mind we decided to cut the release
cycle short and just release 2.4 with Qt5 and some bugfixes.

The good news in all of this is that we should be able to make OpenLP's multimedia capabilities more powerful thanks
to the reworking of media in Qt5. This should also encourage developers to continue contributing to OpenLP, which means
that we all win.

Here's our intended release cycle for OpenLP 2.4:

+---------------+------------------------+
| Date          | Version                |
+===============+========================+
| 27 Dec 2015   | OpenLP 2.3.1 aka Alpha |
+---------------+------------------------+
| 10 Jan 2016   | OpenLP 2.3.2 aka Beta  |
+---------------+------------------------+
| 31 Jan 2016   | OpenLP 2.4             |
+---------------+------------------------+

If we feel we need it, we may release a second beta on the 24th of January, but this depends on developer availability,
and how many bugs we have found and/or fixed.

We Need You
-----------

Again, we need you. We've just uploaded some fresh language files to `Transifex for OpenLP 2.4`_ (you may need to be
logged in to view this page), and we need your help to translate them into your languages. We'll blog in about a week
again with a status update for these translations. Not many strings have changed, but we'd like to give folks whose
translations were not able to be included in OpenLP 2.2 to get their translations up to date and included in OpenLP 2.4.

[ Image Credit: `FAST by fhirART`_ ]

.. _Transifex for OpenLP 2.4: https://www.transifex.com/openlp/openlp/openlp-24x/
.. _FAST by fhirART: https://www.flickr.com/photos/64252494@N07/7573429776/

