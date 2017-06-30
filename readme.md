# Lukeflix
After being bored of the usual Netflix collection, and being tired of going through my hard drive and trying to find the perfect movie to watch, I wanted a simple way to browse my movies.
I tried various 3rd-party tools including Plex, which is great, but it lacked an open API, for me to add onto it, so I just decided to create my own version.

## Overview
There are two parts for this program, a server app and a client side which at first will be accessible via web, and soon a cross-platform desktop app. iOS/watchOS/tvOS apps are in consideration in the near future.

Currently, the goal for this application is that a user will be able to provide one or several local folder(s) or external drive(s) with .mp4 movie files and the server will index the folders to find the movies, and then pull matching information from [The Movie Database](https://www.themoviedb.org) (TMDB).
All the movies, cast, crew, genres, and more will be easily searchable, sortable, filterable, and playable through a custom interface.

As of now, this project is setup to utilize the PHP [Laravel](https://laravel.com) framework for backend services, However as I improve my skills at Ruby, or Node, I most likely will make the transition(s).
As far as the front end, I'll base most of the work around [React](https://facebook.github.io/react/), and React Native, and possibly use [Electron](https://electron.atom.io) for a port to a native Desktop application.

## Current state
Right now, the project is in development, just at a base Laravel install with database migrations.

## Setup
You can setup a local version of this project yourself to try it out.

### Requirements
* LAMP Stack
* Composer

### Setup
* After cloning a copy of the repository, run `composer install`.
This will grab all the needed dependencies.
* Edit the `.env` file with information to connect to your database.
* Run `php artisan migrate`. This will update your database with the project structure.

## Project tracking
To keep track of tasks for this project, I have created a [Trello](https://trello.com/b/aV1G39NW/lukeflix) board.

## License & usage
Currently this code is open source under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0). This may change in the future.
Feel free to use for private and commercial use, distribution, and modification. Please note, I am not liable
if the code does not function as expected or for improper use of this program. I also ask that users refrain from using this application with illegally acquired content.
