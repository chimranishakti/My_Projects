# 🎬 Movie Finder

A web application built with PHP and MySQL that lets users search for any movie or TV show and instantly view its genre, lead cast, and story summary using the OMDB API.

## Features

- Search any movie or TV show by title
- View genre, lead actors/actresses, and plot summary
- See IMDB rating and poster
- Save favorite movies to a MySQL database
- Custom "cinema marquee" themed UI

## Tech Stack

- **Backend:** PHP
- **Database:** MySQL
- **API:** OMDB API
- **Frontend:** HTML, CSS

## Setup Instructions

### 1. Get a free OMDB API Key
- Visit [omdbapi.com/apikey.aspx](https://www.omdbapi.com/apikey.aspx)
- Select the "FREE" plan and enter your email
- Activate the key from the confirmation email
- Open `config.php` and replace the placeholder:
  ```php
  define('OMDB_API_KEY', 'YOUR_API_KEY_HERE');
  ```

### 2. Set up the database
- Start Apache and MySQL in XAMPP
- Open `http://localhost/phpmyadmin`
- Create a new database named `movie_finder`
- Import the `database.sql` file (or run its query in the SQL tab)

### 3. Run the project
- Copy the project folder into `C:\xampp\htdocs\`
- Open `http://localhost/movie-finder/` in your browser

## Project Structure

| File | Description |
|------|-------------|
| `config.php` | Database connection and API key |
| `index.php` | Landing page |
| `search.php` | Movie search page |
| `save.php` | Saves a movie to favorites |
| `favorites.php` | Displays and manages saved favorites |
| `style.css` | UI styling |
| `database.sql` | Database table schema |

## Future Improvements

- Filter/sort results by genre
- Handle multiple search results (movie vs. series)
- User authentication with personal favorites lists
- Search history tracking
