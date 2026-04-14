# B-Advice WordPress Thema - Installatie

## Vereisten
- WordPress 6.0 of hoger
- PHP 8.0 of hoger

---

## Stap 1 – Thema uploaden
1. Ga naar **WordPress Admin → Weergave → Thema's**
2. Klik op **Nieuw toevoegen → Thema uploaden**
3. Upload de `b-advice.zip`
4. Klik op **Activeren**

---

## Stap 2 – Pagina's aanmaken
Maak de volgende pagina's aan via **Pagina's → Nieuw**. De **slug (permalink)** is belangrijk!

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

---

## Stap 3 – Startpagina instellen
1. Ga naar **Instellingen → Lezen**
2. Selecteer **Een statische pagina**
3. Startpagina: **Home**
4. Klik op **Wijzigingen opslaan**

---

## Stap 4 – Navigatiemenu instellen
1. Ga naar **Weergave → Menu's**
2. Maak een nieuw menu aan (bijv. "Primair menu")
3. Voeg toe: Over ons, Diensten, B-Organized, Bestellingen, Nieuws, Contact
4. Selecteer menulocatie **Primair menu**
5. Sla op

---

## Stap 5 – WooCommerce installeren (webshop + betalen)

### 5a. WooCommerce installeren
1. Ga naar **Plugins → Nieuw toevoegen**
2. Zoek **WooCommerce**
3. Klik op **Installeren** → **Activeren**
4. Doorloop de WooCommerce setup wizard (valuta: EUR, land: Nederland)

### 5b. WooCommerce pagina's
WooCommerce maakt automatisch deze pagina's aan:
- **Shop** (productcatalogus)
- **Winkelwagen** (cart)
- **Afrekenen** (checkout)
- **Mijn account**

### 5c. Producten toevoegen (#1 t/m #5)
Ga naar **Producten → Nieuw product** en voeg toe:

| # | Productnaam                        | Type   |
|---|-------------------------------------|--------|
| 1 | Ondergrondse afvalcontainer         | Eenvoudig |
| 2 | Containerkader & verzinkstuk        | Eenvoudig |
| 3 | SMART sensormodule                  | Eenvoudig |
| 4 | Dekselpakket & invoersloten         | Eenvoudig |
| 5 | Jaarlijks onderhoudspakket          | Eenvoudig |

Vul per product in:
- Naam, beschrijving, prijs (of "Op aanvraag" met prijs 0)
- Afbeelding (Productafbeelding, rechtsboven)
- Categorie (bijv. Containers, Sensoren, Service)

### 5d. Betaling instellen – iDEAL via Mollie (aanbevolen voor NL)
1. Ga naar **Plugins → Nieuw toevoegen**
2. Zoek **Mollie Payments for WooCommerce**
3. Installeer & activeer
4. Ga naar **WooCommerce → Instellingen → Betalingen**
5. Activeer: iDEAL, Creditcard, Bankoverschrijving
6. Klik op Mollie en voer uw **Live API-sleutel** in (verkrijgbaar via mollie.com)

### 5e. Verzending / levering instellen
1. Ga naar **WooCommerce → Instellingen → Verzending**
2. Voeg een verzendzone toe voor Nederland
3. Kies verzendmethode: bijv. "Vaste prijs" of "Gratis verzending"
4. Vul de kosten in

---

## Stap 6 – Nieuws publiceren
Publiceer nieuwsberichten via **Berichten → Nieuw bericht**.
- Gebruik categorieën (bijv. Innovatie, Gemeenten, Duurzaamheid, B-Organized)
- Voeg een uittreksel (samenvatting) toe

---

## Stap 7 – Contact e-mail instellen
Het contactformulier stuurt naar het beheerders e-mailadres.
Controleer via **Instellingen → Algemeen → E-mailadres van de beheerder**

---

## Afbeeldingen
Het thema bevat:
- `images/hero-waste.jpg` — Hero homepage
- `images/b-organized-dashboard.jpg` — B-Organized pagina
- `images/logo.svg` — B-Advice logo

Vervang voor eigen afbeeldingen.

---

## Kleurinstellingen aanpassen
Alle kleuren staan als CSS-variabelen bovenaan `style.css`:

```css
:root {
  --navy:  hsl(216, 76%, 15%);  /* Donkerblauw */
  --green: hsl(153, 50%, 46%);  /* Groen accent */
}
```

---

## Snelle checklist na lancering
- [ ] SSL-certificaat actief (https://)
- [ ] WooCommerce betalingen getest (testmodus)
- [ ] Contactformulier getest
- [ ] Cookie consent getest
- [ ] Mobiel getest (iPhone + Android)
- [ ] Google Search Console aangemeld
- [ ] Privacy & cookiebeleid actueel
