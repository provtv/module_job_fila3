import fs from 'fs/promises';
import path from 'path';
<<<<<<< HEAD
=======
import { pathToFileURL } from 'url';
>>>>>>> 688d0704 (first)

async function collectModuleAssetsPaths(paths, modulesPath) {
  modulesPath = path.join(__dirname, modulesPath);

  const moduleStatusesPath = path.join(__dirname, 'modules_statuses.json');

  try {
    // Read module_statuses.json
    const moduleStatusesContent = await fs.readFile(moduleStatusesPath, 'utf-8');
    const moduleStatuses = JSON.parse(moduleStatusesContent);

    // Read module directories
    const moduleDirectories = await fs.readdir(modulesPath);

    for (const moduleDir of moduleDirectories) {
      if (moduleDir === '.DS_Store') {
        // Skip .DS_Store directory
        continue;
      }

      // Check if the module is enabled (status is true)
      if (moduleStatuses[moduleDir] === true) {
        const viteConfigPath = path.join(modulesPath, moduleDir, 'vite.config.js');
<<<<<<< HEAD
        const stat = await fs.stat(viteConfigPath);

        if (stat.isFile()) {
          // Import the module-specific Vite configuration
          const moduleConfig = await import(viteConfigPath);
=======

        try {
          await fs.access(viteConfigPath);
          // Convert to a file URL for Windows compatibility
          const moduleConfigURL = pathToFileURL(viteConfigPath);

          // Import the module-specific Vite configuration
          const moduleConfig = await import(moduleConfigURL.href);
>>>>>>> 688d0704 (first)

          if (moduleConfig.paths && Array.isArray(moduleConfig.paths)) {
            paths.push(...moduleConfig.paths);
          }
<<<<<<< HEAD
=======
        } catch (error) {
          // vite.config.js does not exist, skip this module
>>>>>>> 688d0704 (first)
        }
      }
    }
  } catch (error) {
    console.error(`Error reading module statuses or module configurations: ${error}`);
  }

  return paths;
}

export default collectModuleAssetsPaths;
