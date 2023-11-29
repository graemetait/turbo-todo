---
marp: true
theme: default
class: invert
title: Html
header: HTML over the wire
---
<!-- _class: lead invert -->

# HTML over the wire

---

# A brief history of web applications

### 2005 - 2015 - Rise of the backend ‘MVC’ frameworks
- Rails helped popularise this and inspired others
- Full pages of HTML generated and served by the server
- Frontend interaction mostly imperative, using jQuery, etc
- State managed in backend and communicated via URL query strings and HTML forms

---

# A brief history of web applications

### 2015 - ? - The SPA years
- Frontend frameworks the focus
- UI mostly declarative and component based
- State now managed in 2 places as frontend and backend are separate applications

---

# A brief history of web applications

### 2020 - ? - The all-in-one SPA frameworks
- Next.js, Remix, etc
- Frontend and backend using same code
- Make heavy use of SSR and hydration

---

# What's next?

---

# htmx
```html
  <button hx-get="/users" hx-target="#users-list">
    Load users
  </button>

  <div id="users-list">
  </div>
```

---

# Turbo


