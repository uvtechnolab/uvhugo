---
title: "Running a batch file from Windows Task Scheduler"
date: 2014-09-18T15:27:17+06:00
draft: false
# page title background image
bg_image: "images/backgrounds/page-title.jpg"
# meta description
description : "Post about running a batch file from Windows Task Scheduler"
# post thumbnail
image: "images/blog/post-1.jpg"
# post author
author: "Chris Van Bael"
# taxonomy
categories: ["Windows"]
tags: ["Windows", "Tips"]
# type
type: "post"
---

For the test automation on my current assignment, we had to run a batch file every day. So of course, we used the [Windows Task Scheduler](http://en.wikipedia.org/wiki/Windows_Task_Scheduler).

It’s very easy to create a task and to schedule it every day around 22:00.  Unfortunately, after checking the next day we noticed it had started on time, but didn’t execute the batch correctly.  So we turned to Google, and found lots of people with the same problem: on [TechNet](http://social.technet.microsoft.com/Forums/windowsserver/en-US/d47d116e-10b9-44f0-9a30-7406c86c2fbe/scheduled-task-wont-run-bat-file?forum=winservermanager), [StackOverflow](http://stackoverflow.com/questions/4437701/run-a-batch-file-with-windows-task-scheduler) and [others](http://superuser.com/questions/654828/how-do-i-get-a-bat-file-to-run-in-task-scheduler-at-pc-startup).

I tried all of the following suggestions from Technet:

1. Make sure that the task is set to “configure for Windows Vista or Windows 2008” on the first page of the task properties (under the “general” tab)

2. Make sure that the task is set to “start in” the folder that contains the batch file: open the task properties, click on the “actions” tab, click on the action and then the “edit” button at the bottom.  In the “Edit Action” Window there is a field for “start in (optional)” that you set to the path to the batch file.

3. Make sure that the task is running as an account that has explicit “Full access” permissions to all these things:  The .bat file itself,  the folder containing the .bat file, and the target files/folders that are affected by the .bat script.  Inherited permissions didn’t seem to work for me.

4. Make sure that the account running the task is a member of the local “administrators” group for this machine

5. Make sure that the task is set to “run whether logged on or not”

6. The Task should run successfully with expected output when you right-click on the task and select “run”  If it does that then it will run successfully when you are logged off.

7. Tick the box “Run with highest privileges”.

Still no success.  Until I found the suggestion that the name of the batch file should be limited to 15 characters.  Did that and success!!

It’s a pity that an OS released in 2009 and Service Packed in 2011 (Windows 7), still has issues with longer filenames. I do remember being told [in 1995](http://en.wikipedia.org/wiki/Windows_95#Long_file_names) that we could use filenames with [up to 255 characters](http://technet.microsoft.com/en-us/library/cc976806.aspx).  Apparantly there is still some older code underneath.