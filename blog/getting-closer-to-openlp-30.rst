.. title: Getting closer to OpenLP 3.0
.. slug: 2019/02/17/getting-closer-to-openlp-30
.. date: 2019-02-17 12:00:00 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
.. previewimage: /cover-images/getting-closer-to-openlp-30.jpg

It has been almost 2 years since the release of 2.4.6 and understandably we are getting a lot of
questions as to when the next release will be ready. The answer is always the same: "When it is
ready". So what does "ready" mean? Currently there are 2 major features that we need to finish
before we feel we can begin the release process:

* The new renderer engine.
* The new VLC based mediaplayer framework.

Once these are in place we will release the first Alpha (2.9.1) and then work from there towards
the final release of 3.0.

So how far are these features from being complete?
--------------------------------------------------

The new rendering engine is fairly close to being complete, but we need to make sure we have all
standard use cases (songs, image, etc.) working correctly.

The new mediaplayer framework still needs some work. All the hard ground work has been done (i.e.
playing videos works), so it is now more a question of connecting the different parts of the code
to make everything work correctly and ironing out the bugs that have crept in.

But why is it taking so long?
-----------------------------

The thing is that it requires time to do development, and as volunteers, time is a scarce resource
when you have full-time jobs and familiies. In fact, within the last year, 3 of the 4 core
developers have been blessed with babies, which means even less time for OpenLP development.

Another reason for the long wait is that we might have been a bit too ambitious with this release.
The thing is that when you start adding code to introduce new major features you often see that the
"old way" of doing things is not optimal for the new features and therefore you want to change the
old code to better support the new code. Sometimes this can lead to using time rewriting code that
strictly speaking does not need rewriting, thereby "stealing" time from new features. So while the
end result is a lot better, it also means longer development time.

License change
--------------

A few months ago we were made aware that OpenLP's current license is not compatible with the
licenses of some of the libraries that OpenLP uses. For instance, PyQt5 is under the GPLv3 license,
which is incompatiable with OpenLPs GPLv2. To resolve this we are planning to relicense OpenLP
under the GPLv3 license. To do this we have contacted all of the known contributors to OpenLP to
get their permission to relicense. So far it has been a success, even though it is a slow process.
Not everybody has replied yet, so if you have contributed in the past but have not been contacted
about this, please contact us.

Other news
----------

Around the time of the upcoming release we will also migrate the OpenLP bug tracker and source code
from `Launchpad.net <https://launchpad.net/openlp>`_ to `GitLab <https://gitlab.com/openlp>`_. This
also means migrating from `bzr` to `git`.
