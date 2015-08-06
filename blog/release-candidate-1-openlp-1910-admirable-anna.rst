.. title: Release Candidate 1: OpenLP 1.9.10 "Admirable Anna"
.. slug: 2012/06/24/release-candidate-1-openlp-1910-admirable-anna
.. date: 2012-06-24 16:06:43 UTC
.. tags: 
.. description: 

|OpenLP 2.0 Release Candidate 1|

We are very proud to announce the first release candidate for OpenLP
2.0, codename "Admirable Anna". This new release, version 1.9.10, is a
preview of what the final version of OpenLP will look like. This release
does not contain any major new features, and mostly consists of bug
fixes and minor enhancements. There will be no more development on
features in this version, all new development will happen in the next
version of OpenLP.

Minor features and enhancements in OpenLP 1.9.10
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

-  OpenLP now has a portable version in PortableApps.com form
-  Users can now set a custom location for their data files
-  DreamBeam song importer
-  PowerSong importer
-  ZionWorx CSV song importer
-  Improved rendering times
-  Keep/restore selected book, chapters and verses when changing the
   bible translation in advanced search
-  Added a dialog to edit metadata of Bibles, and additional language
   options.
-  UI and usability improvements to the web remote

Major bugs fixed in OpenLP 1.9.10:
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

-  The new BibleGateway web site was causing issues with the web Bible
   importer
-  OpenLP did not exit properly on some Windows systems
-  Disabled VLC integration on FreeBSD due to it not being supported by
   VLC
-  Theme wizard now uses the current output display geometry when
   creating a thumbnail for a theme
-  Fixed a problem where newly imported Bibles would throw an error
-  Fixed most of the issues surrounding the progress bar for videos

Known issues:
^^^^^^^^^^^^^

When using song imports, if the filename or its folder contains
non-ascii characters, then this may cause a crash. A workaround is to
rename the file/use a different folder with plain a-z characters. Only
affects imports from openlp.org 1.x, OpenLP 2.0, EasySlides,
EasyWorship, PowerSong, and ZionWorx.

Getting Ready for the Final Release of OpenLP 2.0
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Web Site
^^^^^^^^

Are you a web designer? Do you know Drupal? We need you!

We're looking for a web designer who knows Drupal to redesign our web
site for the upcoming OpenLP 2.0 launch later this year. We will be
upgrading the web site to Drupal 7, and moving our forums over to
Vanilla Forums, so we need someone who at least has experience with
Drupal 7, and possibly experience with Vanilla Forums too. The theme
needs to be based on our new logo and the colour scheme that goes with
it. We can provide you with the SVG file, and any other help you need.

We're also looking for some people who can help maintain the site. This
isn't a huge job, thanks to Drupal, but we do need folks who can
troubleshoot any bugs that arise (there have been a couple since our
recent upgrade to Drupal 6), and update the Drupal installation with
newer versions of modules and the Drupal core when new minor releases
come out.

Release Parties
^^^^^^^^^^^^^^^

Some people have also mentioned having regional release parties, similar
to the Ubuntu Linux release parties. Please go ahead and try to organise
a release party in your area, to celebrate the long-awaited final
release of OpenLP 2.0. Release parties don't have to be anything fancy,
just a couple of folk meeting somewhere to celebrate the new release of
OpenLP 2.0 in a few months.

    There was also a prophet, Anna, the daughter of Penuel, of the tribe
    of Asher. She was very old; she had lived with her husband seven
    years after her marriage, and then was a widow until she was
    eighty-four. She never left the temple but worshiped night and day,
    fasting and praying. Coming up to them at that very moment, she gave
    thanks to God and spoke about the child to all who were looking
    forward to the redemption of Jerusalem.

    Luke 2:36-38 NIV

.. |OpenLP 2.0 Release Candidate 1| image:: http://openlp.org/files/u2/rc1.png
