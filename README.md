# 🎨 Laravel Design Patterns

Welcome to the **Laravel Design Patterns** repository! This project serves as an educational playground and reference guide for implementing object-oriented Design Patterns within a modern PHP and Laravel ecosystem. The concepts here are heavily inspired by the classic book *"Head First Design Patterns"*.

---

## 📑 Table of Contents

- [About This Repository](#-about-this-repository)
- [Getting Started](#-getting-started)
- [Design Patterns Implemented](#-design-patterns-implemented)
- [Book Club Guidelines & Conventions](#-book-club-guidelines--conventions)
  - [Branch Naming Standards](#branch-naming-standards)
  - [Folder Structure Standards](#folder-structure-standards)
  - [Documentation Standards](#documentation-standards)

---

## 📖 About This Repository

This repository aims to bridge the gap between theoretical design patterns and practical, real-world application using the Laravel framework. Instead of a traditional MVC layout, the codebase is modularized by design pattern chapters, making it easy to isolate, study, and test individual concepts.

[⬆ Back to Top](#-table-of-contents)

---

## 🚀 Getting Started

To get this project up and running locally, follow these standard Laravel setup steps:

1. **Clone the repository:**
   ```bash
   git clone <repo-url>
   cd design-patterns
   ```
2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```
3. **Environment Setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. **Run the application:**
   ```bash
   php artisan serve
   npm run dev
   ```

[⬆ Back to Top](#-table-of-contents)

---

## 🧩 Design Patterns Implemented

Each pattern is encapsulated within its own namespace under the `app/` directory and has corresponding routes defined in `routes/web.php`.

### [Chapter 1: Strategy Pattern](app/Chapter1_StrategyPattern)
* **Concept:** Defines a family of algorithms, encapsulates each one, and makes them interchangeable.
* **Example:** SimUDuck (Ducks with interchangeable flying and quacking behaviors).
* **Route:** `/duck`

### [Chapter 2: Observer Pattern](app/Chapter2_ObserverPattern)
* **Concept:** Defines a one-to-many dependency between objects so that when one object changes state, all its dependents are notified.
* **Example:** Weather Station (Central data publisher with multiple display subscribers).
* **Routes:** `/weather`, `/weather/current-conditions`, etc.

### [Chapter 3: Decorator Pattern](app/Chapter3_DecoratorPattern)
* **Concept:** Attaches additional responsibilities to an object dynamically.
* **Example:** Text Formatting (Dynamically adding bold, italic, or custom formats to text).
* **Route:** `/decorator`

[⬆ Back to Top](#-table-of-contents)

---

## 🤝 Book Club Guidelines & Conventions

Welcome, book club members! As we read through and implement these patterns together, please adhere to the following conventions to keep our shared repository educational, clean, and organized.

### Branch Naming Standards

Please use the following prefixes when creating a new branch:

- `feat/`: For adding a new design pattern or major feature (e.g., `feat/chapter4-factory-pattern`)
- `fix/`: For bug fixes within existing patterns (e.g., `fix/strategy-duck-behavior`)
- `docs/`: For documentation updates (e.g., `docs/convention-update`)
- `refactor/`: For code refactoring without adding features or fixing bugs (e.g., `refactor/observer-interfaces`)

**Example:** `git checkout -b feat/chapter4-factory-pattern`

### Folder Structure Standards

When adding a new Design Pattern, follow the modular structure used in previous chapters:

1. **Root Namespace:** Create a new directory under `app/` named `ChapterX_PatternName` (e.g., `Chapter4_FactoryPattern`).
2. **Subdirectories:** Inside your chapter folder, organize your classes logically. Common subdirectories include:
   - `Controllers/`: For handling HTTP requests and returning views.
   - `Interfaces/`: For defining contracts (crucial for design patterns!).
   - `Models/`: For concrete implementations of the pattern.
   - `Behaviours/` or `Components/`: If the pattern requires specific isolated logic.
3. **Routing:** Add your demonstration routes to `routes/web.php` and group them logically.

### Documentation Standards

Clear documentation is the most important part of an educational repository. 

- **Inline Comments:** Use PHPDoc blocks (`/** ... */`) for all classes, interfaces, and methods. Explain *why* a particular pattern is being used in the context of the code.
- **README Updates:** Whenever a new chapter is added, update the [Design Patterns Implemented](#-design-patterns-implemented) section in this `README.md` with a brief summary, the underlying concept, and the route to test it.
- **Commit Messages:** Write descriptive commit messages. A good format is: `[Type] Short description` (e.g., `[feat] Add abstract factory interface`).

[⬆ Back to Top](#-table-of-contents)

---
*Happy Coding!*
