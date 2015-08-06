.. title: Last Call for Translators!
.. slug: 2012/11/15/last-call-translators
.. date: 2012-11-14 22:11:31 UTC
.. tags: 
.. description: 

|Translate OpenLP|

**Update:** Instructions on how to test your translation out have been
added to the `bottom of this blog
post <http://openlp.org/en/blog/2012/11/15/last-call-translators#testing-translations>`__.

This is the final call for all translators. If you wish to have OpenLP
in your langauge you need to have completed the translation of
`OpenLP <https://www.transifex.com/projects/p/openlp/>`__ on the
`Transifex <https://www.transifex.com/>`__ site ***by midnight UTC (GMT)
on Friday the 23rd of November 2012***.

Because we believe strongly in quality over quantity at OpenLP, we will
not be including any translations that are incomplete into the final
build. **This means that if you want your language to be part of the
final release of version 2.0, you need to make sure it is 100% done by
the end of Friday the 23rd**. This deadline also gives you just over a
week to complete any outstanding translations.

Currently, the following translations are more than 85% complete, but
still need some work (ordered from most complete to least complete). My
estimate is that none of these should take longer than an hour to
complete.

#. Afrikaans
#. Dutch
#. German
#. Hungarian
#. Japanese
#. Polish
#. Spanish
#. Greek
#. French
#. Danish

The following translations are between 20% and 65% complete. Unless
these are worked on this week, they probably won't make it into the
final release of OpenLP.

#. Russian
#. Finnish
#. Slovak
#. Bulgarian
#. Italian
#. Chinese (Taiwan)

Lastly, the following translations are less than 10% complete. If any of
these translations makes it into the final release, I will be very
surprised. These translations seem to have been abandoned by their
translators.

#. Korean
#. Latvian
#. Romanian
#. Albanian
#. Chinese (China)
#. Korean (Korea)
#. Spanish (Chile)

|Current Status of OpenLP Translations|

Testing Out Your Translation
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

To test your translation out, do the following:

#. Make sure you are running the `latest nightly
   build <http://openlp.org/download#nightly-builds>`__
#. Install Qt Linguist
   Windows and OS X users can download Qt Linguist from here:
   http://code.google.com/p/qtlinguistdownload/downloads/list
   Ubuntu, Fedora, and other Linux and Unix users can install Qt
   Linguist from their package manager
#. Download the language file from Transifex
#. Open it in Qt Linguist
#. Open the File menu, select "Release" and save the resulting release
   file with only your language code as the file name (see Transifex for
   your language code)
#. Copy the release file to OpenLP's i18n directory
   Windows: C:\\Program Files\\OpenLP\\i18n or C:\\Program Files
   (x86)\\OpenLP\\i18n
   Mac OS X: /Applications/OpenLP.app/Contents/MacOS/i18n/
   Linux: /usr/share/openlp/i18n/
   \*BSD: /usr/local/share/openlp/i18n/
#. (Re)start Openlp and select your language

.. |Translate OpenLP| image:: http://openlp.org/files/u2/applications-development-translation.png
.. |Current Status of OpenLP Translations| image:: http://openlp.org/files/u2/openlp_translations_0.png
