import NextAuth from "next-auth";
import { authOptions } from "@/auth"; // Import des options depuis le fichier auth.ts

export const GET = NextAuth(authOptions);
export const POST = NextAuth(authOptions);
