PGDMP         &            
    u            lagels    9.6.1    9.6.2     Z           0    0    ENCODING    ENCODING     #   SET client_encoding = 'SQL_ASCII';
                       false            [           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            \           1262    32768    lagels    DATABASE     �   CREATE DATABASE lagels WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Mexico.1252' LC_CTYPE = 'Spanish_Mexico.1252';
    DROP DATABASE lagels;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            ]           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12387    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            ^           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    32782 
   categorias    TABLE     �   CREATE TABLE categorias (
    id integer NOT NULL,
    nombre character varying(255) NOT NULL,
    titulo character varying(255) NOT NULL,
    frase text NOT NULL
);
    DROP TABLE public.categorias;
       public         postgres    false    3            �            1259    32780    categorias_id_seq    SEQUENCE     s   CREATE SEQUENCE categorias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.categorias_id_seq;
       public       postgres    false    3    188            _           0    0    categorias_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE categorias_id_seq OWNED BY categorias.id;
            public       postgres    false    187            �            1259    32769    usuarios    TABLE     '  CREATE TABLE usuarios (
    id integer NOT NULL,
    nombre character varying(255) NOT NULL,
    primer_apellido character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    correo_electronico character varying(255) NOT NULL,
    segundo_apellido character varying(255)
);
    DROP TABLE public.usuarios;
       public         postgres    false    3            �            1259    32775    usuarios_id_seq    SEQUENCE     q   CREATE SEQUENCE usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.usuarios_id_seq;
       public       postgres    false    185    3            `           0    0    usuarios_id_seq    SEQUENCE OWNED BY     5   ALTER SEQUENCE usuarios_id_seq OWNED BY usuarios.id;
            public       postgres    false    186            �           2604    32785    categorias id    DEFAULT     `   ALTER TABLE ONLY categorias ALTER COLUMN id SET DEFAULT nextval('categorias_id_seq'::regclass);
 <   ALTER TABLE public.categorias ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    188    187    188            �           2604    32777    usuarios id    DEFAULT     \   ALTER TABLE ONLY usuarios ALTER COLUMN id SET DEFAULT nextval('usuarios_id_seq'::regclass);
 :   ALTER TABLE public.usuarios ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    186    185            W          0    32782 
   categorias 
   TABLE DATA               8   COPY categorias (id, nombre, titulo, frase) FROM stdin;
    public       postgres    false    188   d       a           0    0    categorias_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('categorias_id_seq', 4, true);
            public       postgres    false    187            T          0    32769    usuarios 
   TABLE DATA               h   COPY usuarios (id, nombre, primer_apellido, password, correo_electronico, segundo_apellido) FROM stdin;
    public       postgres    false    185   �       b           0    0    usuarios_id_seq    SEQUENCE SET     7   SELECT pg_catalog.setval('usuarios_id_seq', 1, false);
            public       postgres    false    186            �           2606    32790    categorias categorias_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY categorias
    ADD CONSTRAINT categorias_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.categorias DROP CONSTRAINT categorias_pkey;
       public         postgres    false    188    188            �           2606    32779    usuarios usuarios_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.usuarios DROP CONSTRAINT usuarios_pkey;
       public         postgres    false    185    185            W   Q   x�3�LJMJ-�t:�D��+�^X�P��Z���P����������P�X����_����W��W��de2�����b���� k!V      T   g   x�3��ILO�)�tL����T1�T14PqOt�4rK�2�4N��KL�H���֋(
H5*�I��r��ҋ*���)��*16rM,I�,�u������������ �/     