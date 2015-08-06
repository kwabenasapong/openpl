.. title: State of the Application: OpenLP 2.0 revision 600
.. slug: 2009/10/15/state-of-the-application-openlp-20-revision-600
.. date: 2009-10-15 10:10:23 UTC
.. tags: 
.. description: 

Hi Folks,

I just thought I'd give you all a quick run-down of the current state of
OpenLP 2.0.

We've been working hard on version 2.0, which is written in Python,
using Qt4 as it's GUI, and the PyQt4 binding to facilitate this.
Yesterday evening we reached another minor milestone when we committed
revision 600 to trunk!

Some of the implemented features include:

-  Cross platform: Windows, Linux, Mac OS X, FreeBSD
-  Plugin architecture with ability to switch plugins on and off on the
   fly
-  Song plugin, with verse ordering for songs
-  Bibles plugin with web and OSIS (Sword Project) import capabilities
-  Media plugin for dealing with audio and video
-  Custom Slides plugin for custom text items that are not songs (like
   liturgy)
-  Image plugin, with multiple images aggregated into a single item in
   the Service Manager (great for slideshows!)
-  Presentations plugin which integrates with PowerPoint, PowerPoint
   Viewer and OpenOffice.org Impress1
-  Audit plugin to track song usage
-  Remote plugin, for remote control (great for remote nursery alerts!)
-  Nursery alerts
-  Customisable slide themes
-  A separate Bible theme can be selected

1. No support for Keynote yet, as none of the developers has a Mac. If
you have a Mac and fancy yourself a developer, \*please\* contact us!

Some of the features we will be implementing:

-  CCLI SongSelect integration (coming soon!)
-  Dual Bible translations per slide
-  Much better internationalisation support

We are still a long way off from a stable release, but it's really
encouraging to see how far we've gotten, and I'm really proud of the
team for all the work they've done so far!

If you're interested in just chatting with the guys, come join us in
#openlp.org on Freenode.

If you're interested in helping out, join us in IRC, and have a look at
our development wiki: http://wiki.openlp.org/
