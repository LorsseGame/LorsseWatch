-- CreateTable
CREATE TABLE "Anime" (
    "idAnime" SERIAL NOT NULL,
    "name" VARCHAR NOT NULL,
    "numberEpisode" INTEGER NOT NULL,
    "numberSaison" INTEGER NOT NULL,
    "imgBig" TEXT,
    "imgSmall" TEXT,

    CONSTRAINT "Anime_pkey" PRIMARY KEY ("idAnime")
);

-- CreateTable
CREATE TABLE "Episode" (
    "idEpisode" BIGSERIAL NOT NULL,
    "name" TIMESTAMPTZ(6) NOT NULL DEFAULT CURRENT_TIMESTAMP,
    "episodeNumber" INTEGER NOT NULL,
    "saisonNumber" INTEGER NOT NULL,
    "img" TEXT,
    "videoLink" TEXT NOT NULL,
    "Description" TEXT,

    CONSTRAINT "Episode_pkey" PRIMARY KEY ("idEpisode")
);

-- CreateTable
CREATE TABLE "History" (
    "idHistory" SERIAL NOT NULL,

    CONSTRAINT "History_pkey" PRIMARY KEY ("idHistory")
);

-- CreateTable
CREATE TABLE "Language" (
    "idLanguage" SERIAL NOT NULL,
    "name" VARCHAR NOT NULL,

    CONSTRAINT "Language_pkey" PRIMARY KEY ("idLanguage")
);

-- CreateTable
CREATE TABLE "List" (
    "idList" SERIAL NOT NULL,

    CONSTRAINT "List_pkey" PRIMARY KEY ("idList")
);

-- CreateTable
CREATE TABLE "Roles" (
    "idRole" SERIAL NOT NULL,
    "name" VARCHAR NOT NULL,

    CONSTRAINT "Roles_pkey" PRIMARY KEY ("idRole")
);

-- CreateTable
CREATE TABLE "Store" (
    "idList" SERIAL NOT NULL,
    "name" TEXT NOT NULL,
    "price" REAL NOT NULL,
    "description" TEXT,

    CONSTRAINT "Store_pkey" PRIMARY KEY ("idList")
);

-- CreateTable
CREATE TABLE "Users" (
    "idUser" SERIAL NOT NULL,
    "email" TEXT NOT NULL,
    "password" TEXT NOT NULL,
    "idHistory" INTEGER NOT NULL,
    "idList" INTEGER NOT NULL,
    "idRole" INTEGER NOT NULL,

    CONSTRAINT "Users_pkey" PRIMARY KEY ("idUser")
);

-- CreateTable
CREATE TABLE "animeHistory" (
    "id" SERIAL NOT NULL,
    "idHistory" INTEGER NOT NULL,
    "idAnime" INTEGER NOT NULL,

    CONSTRAINT "animeHistory_pkey" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "animeList" (
    "id" SERIAL NOT NULL,
    "idList" INTEGER NOT NULL,
    "idAnime" INTEGER NOT NULL,

    CONSTRAINT "animeList_pkey" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "episodeAnime" (
    "id" SERIAL NOT NULL,
    "idAnime" INTEGER NOT NULL,
    "idEpisode" BIGINT NOT NULL,

    CONSTRAINT "episodeAnime_pkey" PRIMARY KEY ("id")
);

-- CreateTable
CREATE TABLE "language" (
    "id" SERIAL NOT NULL,
    "idEpisode" BIGINT NOT NULL,
    "idLanguage" INTEGER NOT NULL,

    CONSTRAINT "language_pkey" PRIMARY KEY ("id")
);

-- AddForeignKey
ALTER TABLE "animeHistory" ADD CONSTRAINT "animeHistory_idAnime_fkey" FOREIGN KEY ("idAnime") REFERENCES "Anime"("idAnime") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "animeHistory" ADD CONSTRAINT "animeHistory_idHistory_fkey" FOREIGN KEY ("idHistory") REFERENCES "History"("idHistory") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "animeList" ADD CONSTRAINT "animeList_idAnime_fkey" FOREIGN KEY ("idAnime") REFERENCES "Anime"("idAnime") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "animeList" ADD CONSTRAINT "animeList_idList_fkey" FOREIGN KEY ("idList") REFERENCES "List"("idList") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "episodeAnime" ADD CONSTRAINT "episodeAnime_idAnime_fkey" FOREIGN KEY ("idAnime") REFERENCES "Anime"("idAnime") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "episodeAnime" ADD CONSTRAINT "episodeAnime_idEpisode_fkey" FOREIGN KEY ("idEpisode") REFERENCES "Episode"("idEpisode") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "language" ADD CONSTRAINT "language_idEpisode_fkey" FOREIGN KEY ("idEpisode") REFERENCES "Episode"("idEpisode") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- AddForeignKey
ALTER TABLE "language" ADD CONSTRAINT "language_idLanguage_fkey" FOREIGN KEY ("idLanguage") REFERENCES "Language"("idLanguage") ON DELETE NO ACTION ON UPDATE NO ACTION;
