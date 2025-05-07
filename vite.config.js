import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/pages/home.css",
                "resources/css/pages/profile.css",
                "resources/css/pages/katalog.css",
                "resources/css/pages/order.css",
                "resources/css/pages/cust-chat.css",

                "resources/css/components/customer/navbar.css",
                "resources/css/components/customer/footer.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
