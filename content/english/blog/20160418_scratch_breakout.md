---
title: "Making a Breakout game with Scratch"
date: 2016-04-18T15:27:17+06:00
draft: false
# page title background image
bg_image: "images/backgrounds/page-title.jpg"
# meta description
description : "Post about making a Breakout clone in Scratch"
# post thumbnail
image: "images/blog/post-1.jpg"
# post author
author: "Chris Van Bael"
# taxonomy
categories: ["Scratch"]
tags: ["Scratch", "games"]
# type
type: "post"
---


Lately I’ve been involved with [CoderDojo](http://www.coderdojobelgium.be/en). It’s real fun to challenge children to be creative with code. A tool we start with is [Scratch](https://scratch.mit.edu/). Now, if you have programmed in ‘real’ programming languages, you may think Scratch is only for children, but it really isn’t. It’s quite powerful!

Especially for creating games it is much easier to quickly create simple games in it than it would be in Python/PyGame for example. In this post I’ll show you how you can create a simple Breakout clone.

If you don’t know Breakout yet, you can read up on it on [Wikipedia](https://en.wikipedia.org/wiki/Breakout_%28video_game%29). In essence it works like this:

> In the game, a layer of bricks lines the top third of the screen. A ball travels across the screen, bouncing off the top and side walls of the screen. When a brick is hit, the ball bounces away and the brick is destroyed. The player loses a turn when the ball touches the bottom of the screen. To prevent this from happening, the player has a movable paddle to bounce the ball upward, keeping it in play.

So, to start open Scratch, right click the Cat scratch, delete it and paint new sprite. Create a nice round colored circle (shift helps to make it round instead of oval):

![Scratch ball screenshot](/images/blog/20160418/scratch_ball.png#center)

Next step is to make the ball move. You can do this by changing the X and Y coordinates. I’ll always put initialization code immediately after “when flag clicked”. This way I’m always sure where my sprite is located, if it visible, etc.

![Scratch ball move screenshot](/images/blog/20160418/scratch_ball_move.png#center)

If you run it, you’ll see that the ball goes to the edge of the screen and then moves along the edge to one corner. It should bounce of course!

Scratch has a very simple mechanism to achieve this: <touching color>. To use this, we create a Stage with corners. At the top and bottom I put a black line. At the bottom I put dark grey lines. You can create this in another program or by selecting Stage, then tab Backdrops, and draw a black line, select it, enlarge it, and move it to top. Copy it and move the copy to bottom. Repeat with grey line for left and right, like this:

![Scratch stage screenshot](/images/blog/20160418/scratch_stage.png#center)

Now it is just a matter of using <touching color> to detect which edge we hit. If we hit the top/bottom edge, we should reverse the Y direction. If we hit left/right edge, we should reverse the X direction, like this:

![Scratch ball collision screenshot](/images/blog/20160418/scrach_ball_collision.png#center)

Next: the paddle. Create a new sprite and draw the paddle. Add code to move it left and right:


![Scratch paddle screenshot](/images/blog/20160418/scratch_paddle.png#center)

We still have an issue that the ball doesn’t bounce of the paddle. Unless you made the paddle the same color as the edges of the Stage. Hey, good idea, let’s do that:Paddle

If you run this on your computer, you might notice that the paddle lags a bit. This is a Windows issue. To solve this, search in Control Panel for keyboard and change the Repeat delay:

![Scratch keyboard screenshot](/images/blog/20160418/scratch_keyboard.png#center)

Now it should start moving quicker.

Ball moves, ball bounces on all sides and on the paddle. But wait, the ball should NOT bounce on the bottom border! So change the bottom border to red for example. An here is an ideal moment to introduce another very useful block of scratch: Broadcast.

With it you can give a signal to other sprite (or your own sprite) that something happened. Very handy to let everything stop for example. Or just to clean up your scripts.

![Scratch ball killed screenshot](/images/blog/20160418/scratch_ball_killed.png#center)

To keep score, I add a variable Score. And to increase the score we need to remove the blocks on the top of the screen. So that’s for the next post…

The Scratch file up to this point: [Breakout1.zip](/files/blog/Breakout1.zip)


