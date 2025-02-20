import type { Config } from "tailwindcss";

export default {
  content: [
    "./pages/**/*.{js,ts,jsx,tsx,mdx}",
    "./components/**/*.{js,ts,jsx,tsx,mdx}",
    "./app/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    extend: {
      colors: {
        background: "var(--background)",
        foreground: "var(--foreground)",
      },
      fontFamily: {
        asgard: ['"Asgard Trial Fit"', "sans-serif"],     // normal, thin, medium, bold, regular weights
        asgardFat: ['"Asgard Trial Fit Fat"', "sans-serif"], // fat weight (900)
      },
    },
  },
  plugins: [],
} satisfies Config;
