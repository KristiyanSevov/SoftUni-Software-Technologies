package animelist.controller;

import animelist.entity.Anime;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import animelist.bindingModel.AnimeBindingModel;
import animelist.repository.AnimeRepository;

import java.util.List;

@Controller
public class AnimeController {

	private final AnimeRepository animeRepository;

	@Autowired
	public AnimeController(AnimeRepository animeRepository) {
		this.animeRepository = animeRepository;
	}

	@GetMapping("/")
	public String index(Model model) {
		List<Anime> animes = this.animeRepository.findAll();
		model.addAttribute("animes", animes);
		model.addAttribute("view", "anime/index");
		return "base-layout";
	}

	@GetMapping("/create")
	public String create(Model model) {
		model.addAttribute("anime", new AnimeBindingModel());
		model.addAttribute("view", "anime/create");
		return "base-layout";
	}

	@PostMapping("/create")
	public String createProcess(Model model, AnimeBindingModel animeBindingModel) {
		if (animeBindingModel.getDescription().equals("") ||
				animeBindingModel.getName().equals("") ||
				animeBindingModel.getWatched().equals("")){
			model.addAttribute("anime", animeBindingModel);
			model.addAttribute("view", "anime/create");
			return "base-layout";
		}
		Anime anime = new Anime();
		anime.setDescription(animeBindingModel.getDescription());
		anime.setName(animeBindingModel.getName());
		anime.setWatched(animeBindingModel.getWatched());
		anime.setRating(animeBindingModel.getRating());
		animeRepository.saveAndFlush(anime);
		return "redirect:/";
	}

	@GetMapping("/delete/{id}")
	public String delete(Model model, @PathVariable int id) {
		Anime anime = this.animeRepository.findOne(id);
		if (anime == null) {
			return "redirect:/";
		}
		model.addAttribute("anime", anime);
		model.addAttribute("view", "anime/delete");
		return "base-layout";
	}

	@PostMapping("/delete/{id}")
	public String deleteProcess(Model model, @PathVariable int id, AnimeBindingModel animeBindingModel) {
		Anime anime = this.animeRepository.findOne(id);
		animeRepository.delete(anime);
		animeRepository.flush();
		return "redirect:/";
	}
}
