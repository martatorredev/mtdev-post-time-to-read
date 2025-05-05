# MTDev – Post Time to Read Block

A custom Gutenberg block that displays the estimated reading time of a post.  
Developed by [Marta Torre](https://martatorre.dev)

---

## 🧩 About this plugin

This plugin adds a WordPress block that calculates and shows the estimated reading time of a post, based on its content.

It is based on the [`post-time-to-read`](https://github.com/WordPress/gutenberg/tree/trunk/packages/block-library/src/post-time-to-read) block from the Gutenberg repository, which is still under development and not yet available in WordPress core.

This standalone version wraps the same idea with a render callback in PHP for full compatibility and performance.

---

## ✨ Features

- Dynamic calculation based on post content  
- Shows reading time both in frontend and editor  
- Server-side rendering (`render_callback`) for performance  
- Lightweight, uses only `@wordpress/scripts`  
- Built for Full Site Editing (FSE) compatibility  

---

## 🛠️ Installation

### Option 1: Clone and build

```bash
git clone https://github.com/martatorredev/mtdev-post-time-to-read.git
cd mtdev-post-time-to-read
npm install
npm run build
```

Then, activate the plugin from your WordPress admin panel.

---

### Option 2: Production use (no build required)

1. Download the latest release ZIP or manually copy the plugin folder containing:  
   - `mtdev-post-time-to-read.php`  
   - The compiled `build/` directory  

2. Upload the plugin to `/wp-content/plugins/` in your WordPress installation.

3. Activate the plugin from the dashboard.

---

## 🧪 Usage

- Open the **Site Editor** and edit the **Single Post** or **Query Loop** template.  
- Insert the block named **"Tiempo de lectura"**.  
- It will display something like:  
  > Tiempo de lectura: 3 minutos  
- The reading time is calculated using an average of 200 words per minute.

---

## 📁 Plugin structure

```
mtdev-post-time-to-read/
├── build/
│   ├── block.json
│   ├── index.js
│   ├── index.asset.php
│   └── style-index.css
├── mtdev-post-time-to-read.php
├── src/ (optional, for development only)
│   ├── edit.js
│   ├── index.js
│   ├── save.js
│   └── style.scss
├── package.json
├── README.md
├── license.txt
└── .gitignore
```

---

## 📚 Based on

This block is inspired by the official [`post-time-to-read`](https://github.com/WordPress/gutenberg/tree/trunk/packages/block-library/src/post-time-to-read) block from the Gutenberg GitHub repository.  
It has been adapted to work independently, with improved compatibility and PHP fallback rendering.

---

## 📝 License

This plugin is licensed under the [GNU General Public License v2.0 or later](https://www.gnu.org/licenses/gpl-2.0.html).

---

## 🙋‍♀️ Author

Developed by [Marta Torre](https://martatorre.dev)  
WordPress developer, contributor, and advocate for accessibility, privacy, and sustainable web development.
