## Boilerplate to speed up wordpress plugin development in Object oriented way.

Contains an autoloader for autoloading classes and a container with interface to register various services to be used as dependecy during the plugin lifecycle.

Steps to use :
1. Clone the repository in your\_wordpress\_installation/wp-contents/plugins/your_plugin folder
2. Choose a specific/unique prefix for your plugin (an abbreviation would be perfect). This is to avoid namespace collision.
3. Start writing your controllers and models in app folder and take care of SINGLE RESPONSIBILITY PRINCIPLE.