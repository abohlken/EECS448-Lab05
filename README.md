# EECS448 Lab05
## Description
This is a repository for a lab for my software engineering class over MySQL.

## Requirements
Exercise 1: Setup Database

We are going to create a very basic message board system. We will have two tables, Users and Posts. The users will house the list of users ids. Each user_id will be a unique identifier for a user and can be a series of characters. Posts will contains the posts the users create. Each post will have the content, a post_id, and an author_id. The author_id will reference the user_id of whoever wrote the post. A post_id should be a simple numeric identifier that is automatically chosen by the database. The content will be a series of text, potentially longer than 255 characters.

The following tables:

    Users
        user_id
    Posts
        post_id
        content
        author_id


Exercise 2: Create User Interface

Files needed:

    CreateUser.html
    CreateUser.php

Using HTML forms again, create a simple frontend that allows the user to create a new user to store in the database. A simple text field and submit button will do. When the users submits, the backend should tell the user if the new user was successfully stored in the database.

The new user should not be stored if:

    The user left the text field empty
    The user already exists

Note: The msqli.query($query) method returns, essentially, false if it does not work.
Exercise 3: Create Posts Interface

Files needed:

    CreatePosts.html
    CreatePosts.php

Create a simple form for the user to give their user name and to write a post. When the user submits the post, the backend should tell the user if the post was saved or not.

The post should not be saved if:

    The post has no text
    The post was not written by an existing user


Administrator Interaction

Required Files Overview:
Exercise 4: AdminHome.html

This should be a series of links to the various administrative pages you will create. You can link directly to ".php" files.
Exercise 5: ViewUsers.php

Display a table of all users.
Exercise 6: ViewUserPosts

Required Files:

    ViewUserPosts.html
    ViewUserPosts.php

Populate a drop down list with all the users

    For this drop down box, you'll need to inject some PHP in your frontend.

When had has chosen a user and clicks submit, the backend will display a table of all the posts that user has made.
Exercise 7: DeletePost

Bring down the mod hammer!

Required Files: DeletePost.html DeletePost.php

The front end will show a table that has a column of posts, authors, and a column of checkboxes in with the heading "Delete?".

The admin should then be able to click the boxes of any posts he/she wants to delete. When the admin clicks submit, all the checked posts should be deleted and a confirmation displaying the post ids of all the deleted posts. 
