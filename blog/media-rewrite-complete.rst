.. title: Media Rewrite Complete
.. slug: 2011/12/02/media-rewrite-complete
.. date: 2011-12-02 07:12:10 UTC
.. tags: 
.. description: 

Hi folks,

I've just committed one of our largest (if not the largest) chunks of
code yet. It is a complete rewrite of the way media works in OpenLP. You
should not see any noticeable difference from your perspective as the
user at the moment, but this change gives us the ability to use various
media "engines" to play videos and audio other than the ones built into
your platform.

For instance, one of the engines we are working on at the moment is VLC.
VLC is the dominant media player, and being able to use VLC as a video
player means that OpenLP should be able to play any video that VLC can
play. However, this is not yet implemented, we'll let you know when it
is.

Due to the nature and the size of this change, we'd really like as many
people as possible to test it out for us, and make sure it is bug-free.
You'll need to download tonight's nightly build (see the download page),
and make sure to backup your OpenLP data and keep the installer for your
previous version of OpenLP close at hand. Don't install this on your
church computer!

If you do encounter any bugs, please check our Launchpad.net bug
tracker, our support system, and the forums before posting your bug
report - we may have already received it from someone else.
