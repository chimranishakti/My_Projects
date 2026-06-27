# 🎬 Movie Finder Project (PHP + MySQL)

## Kya karta hai ye project?
Movie ka naam search karo → milta hai:
- Genre (Comedy, Romance, Horror, etc.)
- Lead Actors/Actresses
- Story Summary (Plot)
- IMDB Rating, Poster
- "Favorites" mein save kar sakte ho (MySQL database mein)

---

## Setup Steps (XAMPP pe)

### Step 1: Free OMDB API Key lo
1. Jao: https://www.omdbapi.com/apikey.aspx
2. "FREE" plan select karo, email daalo
3. Email mein key aayegi (kuch minute lagte hain)
4. `config.php` file kholo, ye line dhundo:
   ```php
   define('OMDB_API_KEY', 'YOUR_API_KEY_HERE');
   ```
   `YOUR_API_KEY_HERE` ki jagah apni key paste kar do.

### Step 2: Database banao
1. XAMPP control panel mein Apache + MySQL start karo
2. Browser mein `http://localhost/phpmyadmin` kholo
3. Naya database banao naam: `movie_finder`
4. `database.sql` file ko Import kar do (ya us file ke andar ki query SQL tab mein paste karke Run karo)

### Step 3: Project run karo
1. Pura `movie_project` folder copy karo `C:\xampp\htdocs\` mein
2. Browser mein kholo: `http://localhost/movie_project/`
3. Movie search karo, enjoy karo!

---

## Files kya kya hain
- `config.php` → Database connection + API key
- `index.php` → Cover/landing page (Movie Finder ka intro)
- `search.php` → Search page (movie dhundo yahan)
- `save.php` → Favorite movie ko DB mein save karta hai
- `favorites.php` → Saved movies dikhata hai, delete option ke saath
- `style.css` → Cinema marquee theme design
- `database.sql` → MySQL table create karne ki query

---

## Future Improvements (agar marks ke liye extra features chahiye)
- Genre ke basis pe filter/sort
- Multiple movie search results (TV series vs Movie)
- User login system (har user ki apni favorites list)
- Search history table
