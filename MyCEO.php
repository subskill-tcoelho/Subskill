<?php

class MyCEO
{
  /**
   * A boss who believes in his team.
   *
   * @param string $alternance The beggining.
   * @param string $projets The journey.
   * @param string $merci My gratitude.
   * @return array
   */
  public function confiance(string $alternance, string $projets, string $merci): array
  {
    $alternance = "Je me rappelle très bien de mon entretien d'embauche. J'arrive dans une boîte un peu intimidante, 
      devant le patron et un Ukrainien un peu dérangé. 
      L'entretien se passe plutôt bien, et je repars avec une certitude : c'est ici que je veux travailler.
      Je passe une année en tant qu'alternant, où j'apprends beaucoup et où je découvre que je suis tombé chez les fous (et j'ai adoré ça ^^) !";

    $projets = "Tu m'as fait confiance et confié des projets importants, et même quand Mika est parti, tu m'as donné les clés de tous les projets Drupal, quasiment les yeux fermés.
      Cette confiance que tu m'as portée m'a permis de m'améliorer plus rapidement et de prendre des responsabilités, mais surtout, ca a été très gratifiant.";

    $merci = "Merci pour la confiance que tu m’as porté. J’espère que tu pourras recevoir en retour tout ce que tu as fais et que tu continues de faire au quotidien pour ceux qui t’entourent.";

    return [$alternance, $projets, $merci];
  }

  /**
   * A boss can be more than just an hard worker.
   *
   * @param string $gentillesse Your particularity.
   * @param string $travail Your hard, soft and sub Skills.
   * @param string $merci Who you are.
   * @return array
   */
  public function valeurs(string $gentillesse, string $travail, string $merci): array
  {

    $gentillesse = "Tu es d'un naturel très gentil et qui sait se mettre à la place des autres, mais en plus, tu fais
      beaucoup d'efforts pour maintenir le moral de ceux qui sont autour de toi.";

    $travail = "Tu es un vrai exemple, tu es doué dans chaque aspect de ton métier, que ce soit les échanges clients, la gestion des employés, mais plus simplement et surtout, le dév.
      Tu es quelqu'un d'inspirant, tant sur le plan humain que professionnel, j'espère que tu vas réussir à tenir le même cap avec la nouvelle structure que tu vas monter.";

    $merci = "Tu es plein de belles valeurs, tu t’es toujours soucié de nous et de notre bien-être.
      Tu déconstruis totalement les clichés qui sont fait des patrons, pas sympas, orgueilleux, froid, ... -> tu es à l'extrême oposé de tout ça.
      C'est un plaisir de t'avoir comme boss et d'avoir pu faire partie d'une si belle équipe, merci !";

    return [$gentillesse, $travail, $merci];
  }

  /**
   * a boss who could do stand-up.
   *
   * @return void
   */
  public function humour(): void
  {
    $humour = "Mais qu'est ce que je me suis bien marré, quels délices tes blagues et tes anecdotes improbables,
    j'aurais bien ris grâce à toi pendant ces 3 ans.
    Mention honorable au mec de chez meta qui nous a tué de rire ce barjot.";
  }

  /**
   * @param string $musique A music i want share with you.
   * @param string $citation Quotes mades for you.
   * @return void
   */
  public function petitPlus($musique, $citation)
  {
    $musique = "Furax Barbarossa - Caravelle";

    $citation = [
      "Je suis un cadran d'horloge sur la façade d'une maison qui montre l'heure à tout le monde, excepté à celui qui est dans la maison.",
      "Mes proches m'ont souvent fait ce reproche, de ne pas me confier assez
      Ils voudraient gratter cette écorce et me faire fondre mes glaciers
      Apercevoir ce qui se cache derrière ce regard sombre et distant
      Ils savent que la façade masque une âme plombée d'épuisement."
    ];
  }
}

?>
