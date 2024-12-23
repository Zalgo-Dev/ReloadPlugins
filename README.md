# 🔄 ReloadPlugins

**ReloadPlugins** est un plugin pour **PocketMine-MP** qui permet de recharger dynamiquement les plugins de votre serveur sans nécessiter un redémarrage complet. Cette fonctionnalité est particulièrement utile pour les administrateurs et développeurs souhaitant appliquer des modifications ou des mises à jour de plugins en temps réel, améliorant ainsi l'efficacité et la flexibilité de la gestion du serveur.

## ✨ Fonctionnalités

- **♻️ Rechargement à chaud des plugins** : Permet de désactiver et réactiver les plugins en cours d'exécution, intégrant les dernières modifications sans interrompre l'expérience des joueurs.

- **🖱️ Commandes intuitives** : Fournit des commandes simples pour recharger des plugins spécifiques ou l'ensemble des plugins installés.

- **🔗 Gestion des dépendances** : Prend en compte les dépendances entre plugins pour assurer un rechargement cohérent et éviter les conflits potentiels.

## 🚀 Installation

1. **📥 Téléchargement** : Récupérez la dernière version du plugin depuis [Poggit](https://poggit.pmmp.io/p/ReloadPlugins).

2. **📂 Placement** : Placez le fichier `.phar` dans le dossier `plugins` de votre serveur PocketMine-MP.

3. **🔄 Redémarrage** : Redémarrez le serveur pour que le plugin soit chargé correctement.

## 🛠️ Commandes

- `/reload <nom_du_plugin>` : Recharge le plugin spécifié.

- `/reload` : Recharge tous les plugins actifs.

## ⚠️ Précautions

Bien que **ReloadPlugins** offre une méthode pratique pour recharger les plugins, il est recommandé de tester cette fonctionnalité dans un environnement de développement avant de l'utiliser sur un serveur de production. Certains plugins peuvent ne pas supporter le rechargement à chaud, ce qui pourrait entraîner des comportements inattendus.

## 🤝 Contributions

Les contributions sont les bienvenues ! N'hésitez pas à ouvrir des issues ou des pull requests pour améliorer ce plugin.

## 📄 Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.
