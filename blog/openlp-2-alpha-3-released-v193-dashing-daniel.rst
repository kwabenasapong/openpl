.. title: OpenLP 2 Alpha 3 Released! (v1.9.3 - "Dashing Daniel")
.. slug: 2010/09/25/openlp-2-alpha-3-released-v193-dashing-daniel
.. date: 2010-09-25 21:09:53 UTC
.. tags: 
.. description: 

We are pleased to announce the release of the third alpha version of
OpenLP!

It has been three months since our last alpha release, and the
developers have been working hard to fix bugs and add new features.
We're getting ever closer to a complete application, and there are
already enough finished features that some Churches are using the alpha
releases in their Sunday Services. We hope more people will be willing
to give this new version a try. Read on for more details about this
release.

***Note, if upgrading from 1.9.2 you will need to convert your song
database, or OpenLP will fail to start.***

The complete list of features can be seen on the Version 2.0 Features
page of the developers' wiki. Some of the new features we have been
working on for this release are:

-  More song imports have been added, including openlp.org 1.x and
   OpenLP 2.0, OpenSong, CCLI, Words of Worship and EasyWorship.
-  The display code has been rewritten, and as a result video
   backgrounds are possible as well as text formatting.
-  A lot of effort has been put into internationalization. Some
   additional languages are now available, although some of those
   available within OpenLP are incomplete. If you would like to help
   translate your language, more information is on our wiki.
-  Spell checking within the song editor.

Important Note

If you have been running a previous release, then you will need to be
aware of a few changes:

#. The songs database has been changed and will cause OpenLP to crash.
   Details to upgrade this are in a previous blog post
#. Due to the display code changes, your themes may no longer work the
   same. You will need to review your themes to check they are OK.
#. In addition, the theme indent and the transparent background options
   have been removed.
#. Presentations may need to be reloaded to rebuild their thumbnail
   cache
#. The user interface has changed in places, so take the time to
   familiarize yourself with the new layout

Version 1.x Users

If you are upgrading from v1, it is now possible to import your song
database direct from the Song Import menu option. At the file open
dialog, enter:

::

    %ALLUSERSPROFILE%\Application Data\openlp.org\Data\songs.olp

Testing

This version is still in alpha. Although quite stable now, it is still
incomplete and not completely tested. Some bugs may exist and some
features may be missing or not working as expected. We would very much
like you to report any problems you find at Launchpad.net

Any questions, please ***first*** check the Frequently Asked Questions,
and then, if you cannot find a suitable answer to your question, contact
us on IRC via the Contact Us menu on the left. (Ask a question in IRC
that is already answered in the FAQ at your peril - the developers don't
like repeating themselves! :)

We are now starting work on our next alpha, which we're hoping will be
our last before we go beta, and are aiming for a Christmas release.
Check our Milestone page to follow progress. Please remember that
dates/milestones may change as the developers work in their spare time.

Download

To download this version, please go to the Development Release section
of the Download page.

If the 1.9.3 version for your system is not there yet, please check back
in a day or two as the packagers work to complete their builds.

Finally, a big thank you to the developers, testers and translators for
the work that has gone into this release.
