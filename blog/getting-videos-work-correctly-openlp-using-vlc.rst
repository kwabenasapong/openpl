.. title: Getting videos to work correctly in OpenLP using VLC.
.. slug: 2012/12/04/getting-videos-work-correctly-openlp-using-vlc
.. date: 2012-12-04 14:12:01 UTC
.. tags: 
.. description: 

|VLC|

Videos are a great way to enhance the worship experience. Sermon
illustrations, home grown videos for announcements before or after a
service, showing videos to help set a “mood” of worship before a service
starts or through a multitude of other creative ways, videos can be
effective tools for worship. OpenLP has the ability to play videos as
part of the service using the
`Media <http://manual.openlp.org/mediamanager.html#media>`_ tab. You
simply add your video, or audio to OpenLP then use it as you do a song
or Bible verses in your service. Easy.

If this works for you, don’t read any further, but what if you set up
OpenLP and videos do not perform correctly? Actually, if videos work for
you keep on reading anyway you might still need this someday. We are
going to walk through a sure fire way of getting videos working in
OpenLP without a lot of work.

First, lets look at how OpenLP plays videos. OpenLP uses resources
already installed on your computer to play videos. That is enough
detail, if you want to do an in-depth look at audio and video codecs by
all means please do but just understand in theory if your computer will
play a file, OpenLP “should” play this file also. Theories are great,
but as with many this theory fails many times in practice. In the past
the solution was to install codec packs and do a variety of other rather
hackish things with hopes that videos would work. This is no longer the
case, thanks to another open source project
`VLC <http://www.videolan.org/vlc/index.html>`_ paired with OpenLP 2.0.

If you have not heard of
`VLC <http://www.videolan.org/vlc/index.html>`_ lets just put it this
way it is the premier media player, regardless of operating system. If
`VLC <http://www.videolan.org/vlc/index.html>`_ won’t play your file,
stop, nothing will play your file. That may not be entirely the case,
but chances are if
`VLC <http://www.videolan.org/vlc/index.html>`_ won’t play it nothing
will. So what does this have to do with OpenLP you ask? Remember OpenLP
uses resources on your computer to play videos and with
`VLC <http://www.videolan.org/vlc/index.html>`_ installed OpenLP can
use this most awesome media player to take care of all of your media
problems.

The first step is to download
`VLC <http://www.videolan.org/vlc/index.html>`_ from
`HERE <http://www.videolan.org/vlc/index.html>`_. If you are running a
Linux distro it should be available using your distro’s package manager.
You will need version 2.0.3 or above to work correctly. Once you have
`VLC <http://www.videolan.org/vlc/index.html>`_ installed we are just
about finished.

Now we need to tell OpenLP to use
`VLC <http://www.videolan.org/vlc/index.html>`_ to play all media.
Don’t worry you won’t regret this and if you do you can always change
this setting back. Go to Settings, then click on Configure OpenLP. You
should now be greeted by a window that looks similar to this:

|Configure OpenLP|

Click on Media on the left hand panel to enter the media settings. You
should see a list of available media players. Click on the check box to
enable `VLC <http://www.videolan.org/vlc/index.html>`_. In the player
order box, click on VLC and use the up arrow to promote it to the top of
the list. You can also disable all the other media players if you wish.
If you check the “Allow media player to be overridden” check box you can
change the player on the fly from the
`Media <http://manual.openlp.org/mediamanager.html#media>`_ tab in the
`Media
Manager <http://manual.openlp.org/glossary.html#g-media-manager>`_.
This is a good option for some users, but really if you are using VLC
you shouldn’t need to do this.

|Media Configuration|

That is it, you should now be able to play about any video you will ever
get your hands on.

 

**Note:** If you install
`VLC <http://www.videolan.org/vlc/index.html>`_ while OpenLP is running
you will need to restart OpenLP after installing
`VLC <http://www.videolan.org/vlc/index.html>`_.

.. |VLC| image:: /pictures/VLMC-Icon.png
.. |Configure OpenLP| image:: /pictures/configuregeneral.png
.. |Media Configuration| image:: /pictures/configuremedia.png

