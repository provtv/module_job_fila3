import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
	build: {
<<<<<<< HEAD
		outDir: "./resources/dist",
		emptyOutDir: false,
        manifest: 'manifest.json',
=======
		outDir: "./public",
		emptyOutDir: false,
        manifest: 'manifest.json',
		/*
>>>>>>> 688d0704 (first)
		rollupOptions: {
			output: {
				entryFileNames: `assets/[name].js`,
				chunkFileNames: `assets/[name].js`,
				assetFileNames: `assets/[name].[ext]`,
			},
		},
<<<<<<< HEAD
=======
		*/
>>>>>>> 688d0704 (first)
	},
	ssr: {
		noExternal: ["chart.js/**"],
	},
	plugins: [
		laravel({
			publicDirectory: "../../../public_html/",
<<<<<<< HEAD
			input: [__dirname + "/resources/css/app.css", __dirname + "/resources/js/app.js", __dirname + "/resources/css/filament/admin/theme.css"],
=======
			input: [
				__dirname + "/resources/css/app.css",
				__dirname + "/resources/js/app.js",
				__dirname + "/resources/css/filament/admin/theme.css"
			],
>>>>>>> 688d0704 (first)
			refresh: [...refreshPaths, "app/Livewire/**"],
		}),
	],
});
