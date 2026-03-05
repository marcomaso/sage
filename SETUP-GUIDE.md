# Ripristino Progetto WordPress Sage: Guida al Setup da Zero

Questa guida ti aiuta a ricreare esattamente il progetto su qualsiasi altro computer seguendo questi passaggi. 

🚨 **Prerequisiti sul computer di destinazione**:
Devi assicurarti che sul computer in cui ti trovi siano installati:
1. **PHP**, **Composer** e **Node.js** (npm)
2. **Docker** (in esecuzione)
3. **Git**

---

### 1. Clona la repository

Come prima cosa devi scaricare tutto il codice da GitHub:

```bash
# Apri il terminale e scegli/crea una cartella dedicata
mkdir -p ~/progetti/sage
cd ~/progetti/sage

# Clona la repository che contiene l'ambiente (.wp-env.json) e il tema
git clone https://github.com/marcomaso/sage.git .
```

---

### 2. Installa le dipendenze del Tema

Il tema `my-sage-theme` ha bisogno delle librerie PHP e Node.js per funzionare. Spostati dentro la sua cartella:

```bash
cd my-sage-theme

# Installa le dipendenze PHP (es. Acorn framework) 
composer install

# Installa le dipendenze Javascript/TailwindCSS e compila gli asset
npm install
npm run build
```

---

### 3. Avvia l'ambiente WordPress Locale (`@wordpress/env`)

Ora torna nella cartella principale e lancia Docker. `@wordpress/env` leggerà il file `.wp-env.json` scaricato da GitHub, provvederà a scaricare l'ultima versione di WordPress, montare il tuo tema e avviarlo sulle porte che abbiamo stabilito.

```bash
cd ..
npx @wordpress/env start
```

*Attendi il completamento, potrebbe volerci circa un minuto.*

---

### 4. Setup e popolamento dei dati in WordPress

A questo punto il sito gira su **[http://localhost:9090](http://localhost:9090)**, ma il database di questo nuovo computer è "fresco". 
Usa la riga di comando per ripristinare in automatico la configurazione, i custom post type che ti servono (le stanze) e le regole dei permalink. 

Puoi semplicemente copiare e incollare questi comandi:

```bash
# Attiva il tema
npx @wordpress/env run cli wp theme activate my-sage-theme

# Imposta una nuova pagina vuota "Home" come homepage del sito
npx @wordpress/env run cli wp option update show_on_front page
npx @wordpress/env run cli wp option update page_on_front $(npx @wordpress/env run cli wp post create --post_type=page --post_title="Home" --post_status=publish --porcelain)

# Genera alcune stanze temporanee e flusha i permalink
npx @wordpress/env run cli bash -c 'id=$(wp post create --post_type=room --post_title="Ocean View Suite" --post_content="Una lussuosa stanza vista oceano" --post_status=publish --porcelain); wp post meta add $id price_from 450; wp post meta add $id size_sqm 65; wp post meta add $id bed_type "King Bed"'

npx @wordpress/env run cli bash -c 'id=$(wp post create --post_type=room --post_title="Premium Pool Villa" --post_content="Villa esclusiva e riservata" --post_status=publish --porcelain); wp post meta add $id price_from 750; wp post meta add $id size_sqm 120; wp post meta add $id bed_type "Private Pool"'

npx @wordpress/env run cli wp rewrite flush
```

---

### 5. Avvia il workflow di Sviluppo

Perfetto! Hai ricreato esattamente lo stato dell'ambiente.
A questo punto, per sviluppare con l'Hot-Reload (quando salvi un file nel tema, la pagina del browser si aggiorna da sola), ti basta andare dentro la cartella del tema e lanciare Vite:

```bash
cd my-sage-theme
npm run dev
```

Puoi accedere al pannello di amministrazione su `http://localhost:9090/wp-admin/` con:
- Utente: `admin`
- Password: `password`
