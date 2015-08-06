.. title: Windows 8 and Buggy Benjamin [Updated]
.. slug: 2012/12/14/windows-8-and-buggy-benjamin
.. date: 2012-12-14 10:12:15 UTC
.. tags: 
.. description: 

|Windows 8|

We've had a number of reports recently of users with Windows 8 being
unable to run OpenLP. Unfortunately from our side we have not had any
problems with our tests on Windows 8. If you have Windows 8 `please
contact us <http://openlp.org/en/support>`__ to let us know your
experiences, both good and bad. Even if everything is working perfectly
fine, we want to know that.

We also need a few technically-inclined people who are experiencing
these issues to help us figure out what is going wrong. You should be
comfortable with the command line as there are a number of technical
bits and pieces that you will need to do, such as installing Python and
some of OpenLP's dependencies.

Secondly, we have found two regressions in version 2.0, which have been
fixed but are waiting for a release. The first is an issue with
transparent themes which are `no longer
transparent <https://bugs.launchpad.net/openlp/+bug/1085609>`__, and the
second is a `bug in the export
function <https://bugs.launchpad.net/openlp/+bug/1085921>`__.

Interestingly, we never realised how much the export feature was used
until it was broken. We've had quite a number of folks reporting the
issue.

If you are experiencing either of these issues on Windows or Mac OS X
then we recommend downgrading to version 1.9.12, `which can still be
found on
SourceForge <http://sourceforge.net/projects/openlp/files/openlp/1.9.12/>`__.
Users on Linux can either patch their version of OpenLP with help from
us, or sit tight until we make a bugfix release.

We're hoping to make a release sometime in December.

**Release Update**
~~~~~~~~~~~~~~~~~~

We're hoping to release version 2.0.1 on Sunday the 6th of January, the
first release of the new year.

.. |Windows 8| image:: http://openlp.org/files/u2/windows8.jpg
