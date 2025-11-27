
# Rond de Borst

## Prerequisites for macOS

Before you start, make sure you have the following tools installed on your Mac:

1. **Docker Desktop**
	- Download and install from [https://www.docker.com/products/docker-desktop/](https://www.docker.com/products/docker-desktop/)
	- After installation, start Docker Desktop and ensure it is running.

2. **Git**
	- Most Macs have Git pre-installed. You can check by running `git --version` in Terminal.
	- If not installed, install via [Homebrew](https://brew.sh/) with `brew install git`.

3. **Visual Studio Code (VS Code)**
	- Download and install from [https://code.visualstudio.com/](https://code.visualstudio.com/)

4. **GitHub Extension for VS Code**
	- Open VS Code, go to Extensions (`Cmd+Shift+X`), and search for "GitHub Pull Requests and Issues".
	- Click Install.

## Cloning the Repository and Setting Up the Develop Branch

1. Open Terminal on your Mac.
2. Navigate to the folder where you want to store the project, e.g.:
	```bash
	cd ~/Projects
	```
3. Clone the repository:
	```bash
	git clone https://github.com/mjgmaas/ronddeborst.git
	cd ronddeborst
	```
4. Switch to the `develop` branch:
	```bash
	git checkout develop
	```

## Building the Project with Docker Compose

1. Make sure Docker Desktop is running.
2. In the Terminal, inside the `ronddeborst` project folder, run:
	```bash
	docker compose up --build
	```
3. The first build may take a few minutes. When finished, the application will be running locally.

## Accessing the Local Development Site

Once Docker Compose has started the project, open your browser and go to:

```
website: http://localhost:8000

mailpit: http://localhost:8025
```

This is your local development site. Any changes you make to the source files will be reflected here after saving and refreshing the browser.

## Editing Source Files with Visual Studio Code

1. Open Visual Studio Code.
2. Use `File > Open...` to open the `ronddeborst` project folder.
3. Make sure the "GitHub Pull Requests and Issues" extension is installed (see Prerequisites).
4. You can now browse and edit files. The extension helps you manage branches and pull requests directly from VS Code.

## Essential Files for Design Changes

To edit the design, you will mostly work with these files:

- **Blade templates (HTML):**
  - `resources/views/`

- **CSS files:**
  - `resources/css/app.css` — Main stylesheet
  - `resources/css/custom-styles.css` — Custom styles

- **Static assets:**
  - `public/assets/thema/` — Images and theme assets

Edit these files to change layouts, styles, and images. Save your changes and refresh your browser to see updates.

## Creating a Feature Branch

A **branch** in Git is like a separate workspace for your changes. It lets you work on new features or fixes without affecting the main code until you're ready to merge. This way, multiple people can work on different things at the same time.

Before making changes, create a new feature branch:

1. In VS Code, open the built-in terminal (`Ctrl+`` or `Cmd+``).
2. Make sure you are on the `develop` branch:
	```bash
	git checkout develop
	```
3. Create and switch to a new feature branch (replace `feature/my-changes` with a descriptive name):
	```bash
	git checkout -b feature/my-changes
	```

## Creating a Pull Request (PR)

A **Pull Request (PR)** is a way to ask for your changes to be added to the main project. It lets others review your work, give feedback, and approve it before it becomes part of the main code. This helps keep the project organized and ensures quality.


When your changes are ready, make a commit.

A **commit** is like saving a snapshot of your work. It records the changes you made so you can track progress, undo mistakes, and share updates with others.

1. Commit your changes:
	```bash
	git add .
	git commit -m "Describe your changes"
	git push origin feature/my-changes
	```

2. Go to [https://github.com/mjgmaas/ronddeborst](https://github.com/mjgmaas/ronddeborst) in your browser.
3. GitHub will suggest to create a Pull Request (PR) for your branch. Click "Compare & pull request".
4. Fill in a clear description of your changes and submit the PR.
5. **A review is required before merging!** Someone will check your changes and may give feedback.
6. Once approved and merged into `develop`, your changes will be automatically deployed to [https://test.ronddeborst.nl](https://test.ronddeborst.nl).

**Tip:** Commit small and often. This makes it easier to track changes, fix mistakes, and review your work.

## Using the GitHub Extension in VS Code

The "GitHub Pull Requests and Issues" extension in Visual Studio Code makes it easy to manage your work without using the command line. Here’s how to use it for common tasks:

### Creating a Branch
1. Open the Source Control panel (`Cmd+Shift+G`).
2. Click the branch icon in the bottom left or use the command palette (`Cmd+Shift+P`) and type "Git: Create Branch".
3. Enter a descriptive name for your branch (e.g. `feature/my-changes`).

### Making Commits
1. After editing files, go to the Source Control panel.
2. You’ll see a list of changed files. Add a message describing your changes in the input box at the top.
3. Click the checkmark icon to commit your changes.

### Pushing Changes
1. After committing, click "Sync Changes" or "Push" in the Source Control panel to upload your changes to GitHub.

### Creating a Pull Request
1. After pushing your branch, open the GitHub Pull Requests panel (icon on the sidebar).
2. Click "Create Pull Request" and follow the prompts to fill in a description and submit your PR.
3. You can view, update, and discuss your PR directly in VS Code.

This extension helps you keep track of your work and collaborate easily, all from within VS Code.


