# B-Advice WordPress Thema - Installatie

## Vereisten
- WordPress 6.0 of hoger
- PHP 8.0 of hoger

## Installatie

### 1. Thema uploaden
1. Ga naar **WordPress Admin → Weergave → Thema's**
2. Klik op **Nieuw toevoegen → Thema uploaden**
3. Upload de `b-advice.zip` (of kopieer de map `b-advice/` naar `wp-content/themes/`)
4. Klik op **Activeren**

### 2. Pagina's aanmaken
Maak de volgende pagina's aan via **Berichten → Pagina's → Nieuw**. De **slug** (permalink) is belangrijk!

| Paginatitel    | Slug (permalink) |
|----------------|------------------|
| Home           | `home`           |
| Over ons       | `over-ons`       |
| Diensten       | `diensten`       |
| B-Organized    | `b-organized`    |
| Bestellingen   | `bestellingen`   |
| Nieuws         | `nieuws`         |
| Contact        | `contact`        |
| Privacybeleid  | `privacybeleid`  |
| Cookiebeleid   | `cookiebeleid`   |

### 3. Startpagina instellen
1. Ga naar **Instellingen → Lezen**
2. Selecteer **Een statische pagina**
3. Startpagina: **Home**
4. Berichtenpagina: laat leeg (nieuws werkt via de Nieuws-pagina)
5. Klik op **Wijzigingen opslaan**

### 4. Navigatiemenu instellen
1. Ga naar **Weergave → Menu's**
2. Maak een nieuw menu aan, noem het bijv. "Primair menu"
3. Voeg de pagina's toe: Over ons, Diensten, B-Organized, Bestellingen, Nieuws, Contact
4. Selecteer de menulocatie **Primair menu**
5. Sla het menu op

### 5. Nieuws publiceren
Publiceer nieuwsberichten via **Berichten → Nieuw bericht**.
- Gebruik categorieën (bijv. Innovatie, Gemeenten, Duurzaamheid, B-Organized) voor filtering op de nieuwspagina
- Voeg een samenvatting toe als uittreksel

### 6. Contact e-mail instellen
De contactformulier stuurt berichten naar het admin e-mailadres.
Controleer dit via **Instellingen → Algemeen → E-mailadres van de beheerder**

---

## Afbeeldingen
Het thema bevat standaard:
- `images/hero-waste.jpg` — Hero afbeelding homepage
- `images/b-organized-dashboard.jpg` — Dashboard afbeelding B-Organized pagina
- `images/logo.svg` — B-Advice logo

Vervang deze bestanden om eigen afbeeldingen te gebruiken.

## Aanpassingen
Alle stijlen staan in `style.css`. Kleuren zijn eenvoudig aan te passen via de CSS-variabelen bovenaan het bestand:

```css
:root {
  --navy:  hsl(216, 76%, 15%);  /* Donkerblauw */
  --green: hsl(153, 50%, 46%);  /* Groen accent */
}
```
