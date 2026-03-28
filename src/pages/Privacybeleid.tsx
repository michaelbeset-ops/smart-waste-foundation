const Privacybeleid = () => {
  return (
    <div className="min-h-screen bg-background">
      <section className="py-20">
        <div className="container mx-auto px-4 max-w-3xl">
          <h1 className="font-heading text-4xl font-bold text-foreground mb-8">Privacybeleid</h1>
          
          <div className="prose prose-lg max-w-none text-foreground/80 space-y-6">
            <p className="text-muted-foreground text-sm">Laatst bijgewerkt: {new Date().toLocaleDateString('nl-NL')}</p>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">1. Inleiding</h2>
            <p>B-Advice, gevestigd aan Achterdijk 26, Nieuwland (UT), is verantwoordelijk voor de verwerking van persoonsgegevens zoals weergegeven in deze privacyverklaring.</p>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">2. Persoonsgegevens die wij verwerken</h2>
            <p>B-Advice verwerkt uw persoonsgegevens doordat u gebruik maakt van onze diensten en/of omdat u deze zelf aan ons verstrekt. Hieronder vindt u een overzicht van de persoonsgegevens die wij verwerken:</p>
            <ul className="list-disc pl-6 space-y-2">
              <li>Voor- en achternaam</li>
              <li>E-mailadres</li>
              <li>Telefoonnummer</li>
              <li>Bedrijfsnaam en functie</li>
              <li>Gegevens over uw activiteiten op onze website</li>
              <li>IP-adres</li>
            </ul>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">3. Waarom wij gegevens verwerken</h2>
            <p>B-Advice verwerkt uw persoonsgegevens voor de volgende doelen:</p>
            <ul className="list-disc pl-6 space-y-2">
              <li>Het afhandelen van uw betaling of bestelling</li>
              <li>U te kunnen bellen of e-mailen indien dit nodig is</li>
              <li>U te informeren over wijzigingen van onze diensten</li>
              <li>Om onze dienstverlening te verbeteren</li>
              <li>B-Advice analyseert uw gedrag op de website om de website te verbeteren</li>
            </ul>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">4. Bewaartermijn</h2>
            <p>B-Advice bewaart uw persoonsgegevens niet langer dan strikt nodig is om de doelen te realiseren waarvoor uw gegevens worden verzameld. Wij hanteren een bewaartermijn van maximaal 24 maanden voor persoonsgegevens.</p>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">5. Delen met derden</h2>
            <p>B-Advice deelt uw persoonsgegevens alleen met derden als dit noodzakelijk is voor de uitvoering van onze overeenkomst met u of om te voldoen aan een wettelijke verplichting.</p>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">6. Cookies</h2>
            <p>B-Advice gebruikt functionele en analytische cookies. Een cookie is een klein tekstbestand dat bij het eerste bezoek aan deze website wordt opgeslagen in de browser van uw computer, tablet of smartphone. Lees ons <a href="/cookiebeleid" className="text-accent hover:underline">cookiebeleid</a> voor meer informatie.</p>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">7. Uw rechten</h2>
            <p>U heeft het recht om uw persoonsgegevens in te zien, te corrigeren of te verwijderen. Daarnaast heeft u het recht om bezwaar te maken tegen de verwerking van uw persoonsgegevens. U kunt een verzoek indienen via info@b-advice.info.</p>

            <h2 className="font-heading text-2xl font-bold text-foreground mt-8">8. Contactgegevens</h2>
            <p>Als u vragen heeft over dit privacybeleid, neem dan contact met ons op:</p>
            <p>
              B-Advice<br />
              Achterdijk 26, Nieuwland (UT)<br />
              <a href="mailto:info@b-advice.info" className="text-accent hover:underline">info@b-advice.info</a><br />
              <a href="tel:+31643125245" className="text-accent hover:underline">+31 (6) 431 25 245</a>
            </p>
          </div>
        </div>
      </section>
    </div>
  );
};

export default Privacybeleid;
