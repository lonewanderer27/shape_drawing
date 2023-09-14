# Shape Drawer App

This repository contains a simple Shape Drawer web application developed in PHP. It allows users to draw various shapes, including lines, striped lines, squares, parallelograms, triangles, and reverse triangles. 

Additionally, the app enforces the input of an odd number greater than or equal to 3. The app is hosted on Vercel, and every commit to this GitHub repository automatically updates the live website at [shape-drawing.vercel.app](https://shape-drawing.vercel.app/).

## Development Environment Setup

We use [Lando](https://lando.dev/), a development environment tool, to simplify the setup of our PHP environment. Follow the steps below to get your development environment up and running.

### Prerequisites

Before you begin, ensure you have the following software installed:

- [Lando](https://lando.dev/download/)
- [Git](https://git-scm.com/downloads)
- A text editor or Integrated Development Environment (IDE) of your choice

### Clone the Repository

```bash
git clone https://github.com/yourusername/shape-drawer.git
cd shape-drawer
```

### Start (Lando) PHP Server
```bash
lando start
```

### Development Workflow
- Make changes to the PHP code in the index.php file as needed.
- Reload the browser window to see new changes.


### Stopping the Development Environment
```bash
lando stop
```
