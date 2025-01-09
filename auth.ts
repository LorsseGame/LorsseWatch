import { PrismaAdapter } from "@auth/prisma-adapter";
import NextAuth from "next-auth"; // Retirer l'import d'AuthOptions
import GoogleProvider from "next-auth/providers/google";
import { prisma } from "./prisma";

export const authOptions = {
  adapter: PrismaAdapter(prisma),
  providers: [
    GoogleProvider({
      clientId: process.env.AUTH_GOOGLE_ID!,
      clientSecret: process.env.AUTH_GOOGLE_SECRET!,
    }),
  ],
  secret: process.env.AUTH_SECRET,
};

export default NextAuth(authOptions);
