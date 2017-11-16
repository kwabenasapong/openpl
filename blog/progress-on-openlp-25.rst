.. title: Progress on OpenLP 2.5
.. slug: 2017/11/12/progress-on-openlp-25
.. date: 2017-11-12 12:00:00 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
.. previewimage: /cover-images/progress-on-openlp-25.jpg

.. raw:: html

    <div class="alert alert-info">This blog post is written by Phill Ridout, one of our developers.</div>

Like many other open source projects, OpenLP uses even version numbers to denote a stable release, and odd version
numbers to denote an unstable (or development) release.

Currently we're in the process of working on OpenLP 2.5, which is the current unreleased and unstable version. We're
still not in a position to make a new release, but I thought I'd write this blog post to assure you that lots of work
is being done behind the scenes.

So what have we been working on?

New features:

- Support for chords in songs
- Support for bibles from the SWORD Project
- Support for ProPresenter 5 song import
- Support for EasyWorship 6 song import
- Upgrade the network projector controller to support the PJLink 2 protocol (in addition to PJLink 1)
- Video backgrounds to songs, Bible verses and custom slides (depending on your platform)
- Video timing display so you can see the time left for a media item
- The splitting of the Web Inferface from the core code allowing faster updates and user defined variations
- A new dark theme for Windows and macOS (see Advanced Settings)

Behind the scenes:

- A new renderer and display based on Reveal.js, which should allow us and you to do a lot more in the long term
- A new RESTful API for better remote control and potential integration from other apps
- The migration to a new web interface framework allowing easier integration for new funtions
- The change to save themes in JSON instead of XML
- Change to the way file paths are represented internally in OpenLP to make interoperability between different operating 
  systems better. This will help with things like transferring service files between different computers.
- A whole lot of bugs fixed

So while we might seem to be quiet, the real reason is because we're trying to get everything ready for another
feature-packed release.

Last, but not least, we've decided to make the next release version 3.0 due to the large number of new features and
changes.

[ Image Credit: `Waiting by Solmaz Zohdi`_ ]

.. _Waiting by Solmaz Zohdi: https://www.flickr.com/photos/solmazz/35284478660/
