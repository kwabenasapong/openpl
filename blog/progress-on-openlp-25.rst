.. title: Progress on OpenLP 2.5
.. slug: 2017/10/29/progress-on-openlp-25
.. date: 2017-10-29 12:00:00 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
.. previewimage: /cover-images/progress-on-openlp-25.jpg

Like many other open source projects, OpenLP uses even version numbers to denote a stable release, and odd version
numbers to denote an unstable (or development) release.

Currently we're in the process of working on OpenLP 2.5 which will become OpenLP 2.6 when we release it. We’re still
not in a position to make this release, but I thought I'd write this blog post to assure you that lots of work is being
done behind the scenes.

So what have we been working on?

New features:

- Support for chords in songs
- Supporting more projectors by upgrading to PJLink 2
- Support for bibles from the SWORD Project
- Support for ProPresenter 5 song import
- Video backgrounds to songs (depending on your platform)
- Video timing display so you can see the time left for a media item
- The splitting of the Web Inferface from the core code allowing faster updates and user defined variations

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

[ Image Credit: `Waiting by Solmaz Zohdi`_ ]

.. _Waiting by Solmaz Zohdi: https://www.flickr.com/photos/solmazz/35284478660/
