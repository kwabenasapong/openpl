.. title: Integration with BibleGateway Broken
.. slug: blog/2019/07/14/integration-with-biblegateway-broken
.. date: 2019-07-14 23:42:41 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
.. previewimage: /cover-images/integration-with-biblegateway-broken.jpg

Over the last few days we have received a TON of reports about OpenLP's integration with BibleGateway being broken.
Users who rely on web Bibles from BibleGateway are telling us that they get an error message whenever they try to
look up new passages (verses are downloaded from Bible Gateway on an as-needed basis in order to comply with Bible
translation copyright terms).

Unfortunately there is no quick fix for this, and because some of the libraries that OpenLP 2.4.6 uses are no longer
available, we are not able to create new builds for the OpenLP 2.4.x release series. We are investigating other options,
but we cannot guarantee anything.

While we are well aware that some bibles available on BibleGateway are not available elsewhere, there are other sources
for a lot of Bibles,  such as `Zefania`_ or from the homepage of Open Song. In both cases do remember to extract the
zip file before importing. See the `Bibles section`_ of the manual for more details on importing Bibles from other
sources.

Alternatively, going to https://www.biblegateway.com/ and copying and pasting the Bible text into a custom slide is
also an option.

The only good news here is that the new implementation for web Bibles in the upcoming OpenLP 3.0 release is not
affected by this, although it is not ready for production use.

We apologise for the problems people are experiencing. The bad side of using an external service like BibleGateway is
that when they change something, OpenLP is not built to handle the change, and appears to be "broken". Sadly, there is
no real way to prevent something like this from happening again.

.. _Zefania: https://sourceforge.net/projects/zefania-sharp/files/Bibles/
.. _Bibles section: http://manual.openlp.org/bibles.html
