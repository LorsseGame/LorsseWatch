import Navbar from "@/src/Components/layout/Navbar";
import type { Metadata } from "next";
// import { Inter } from "next/font/google";
import "./globals.css";

// const inter = Inter({ subsets: ["latin"] });

export const metadata: Metadata = {
  title: "LorsseWatch",
  description: "Application streaming anime",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body className="dark">
        <Navbar></Navbar>
        {children}
      </body>
    </html>
  );
}
