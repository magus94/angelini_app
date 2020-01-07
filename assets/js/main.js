function apagarNoticia(id) {
	$.confirm({
		title: 'Apagar Notícia?',
		theme: 'modern',
		content: "Deseja realmente deletar esta noticia.",
		closeIcon: true,
		buttons: {
			yes: {
				text: 'Apagar',
				btnClass: 'btn btn-danger',
				action: function () {
					$.post(`${base_url}noticias/apagar/`, { id : id} ).done(window.location.reload());				}
			},
			no: {
				text: 'Cancelar',
				action: function () {
					$.alert({
						title: 'Cancelado!',
						theme: 'modern',
						content: "Notícia não apagada!"
					})
				}
			},
		}
	});
}

function apagarMembro(id) {
	$.confirm({
		title: 'Apagar Membro?',
		theme: 'modern',
		content: "Deseja realmente deletar este membro.",
		closeIcon: true,
		buttons: {
			yes: {
				text: 'Apagar',
				btnClass: 'btn btn-danger',
				action: function () {
					$.post(`${base_url}corpo_tecnico/apagar/`, { id : id} ).done(window.location.reload());				}
			},
			no: {
				text: 'Cancelar',
				action: function () {
					$.alert({
						title: 'Cancelado!',
						theme: 'modern',
						content: "Membro não apagado!"
					})
				}
			},
		}
	});
}

function apagarServico(id) {
	$.confirm({
		title: 'Apagar Serviço?',
		theme: 'modern',
		content: "Deseja realmente deletar este serviço.",
		closeIcon: true,
		buttons: {
			yes: {
				text: 'Apagar',
				btnClass: 'btn btn-danger',
				action: function () {
					$.post(`${base_url}servicos/apagar/`, { id : id} ).done(window.location.reload());				}
			},
			no: {
				text: 'Cancelar',
				action: function () {
					$.alert({
						title: 'Cancelado!',
						theme: 'modern',
						content: "Serviço não apagado!"
					})
				}
			},
		}
	});
}

function apagarVideo(id) {
	$.confirm({
		title: 'Apagar Video?',
		theme: 'modern',
		content: "Deseja realmente deletar este video.",
		closeIcon: true,
		buttons: {
			yes: {
				text: 'Apagar',
				btnClass: 'btn btn-danger',
				action: function () {
					$.post(`${base_url}videos/apagar/`, { id : id} ).done(window.location.reload());				}
			},
			no: {
				text: 'Cancelar',
				action: function () {
					$.alert({
						title: 'Cancelado!',
						theme: 'modern',
						content: "Video não apagado!"
					})
				}
			},
		}
	});
}

function apagarFeedback(id) {
	$.confirm({
		title: 'Apagar Feedback?',
		theme: 'modern',
		content: "Deseja realmente deletar este feedback.",
		closeIcon: true,
		buttons: {
			yes: {
				text: 'Apagar',
				btnClass: 'btn btn-danger',
				action: function () {
					$.post(`${base_url}feedback/apagar/`, { id : id} ).done(window.location.reload());				}
			},
			no: {
				text: 'Cancelar',
				action: function () {
					$.alert({
						title: 'Cancelado!',
						theme: 'modern',
						content: "Feedback não apagado!"
					})
				}
			},
		}
	});
}

function apagarAgendamento(id) {
	$.confirm({
		title: 'Apagar Agendamento?',
		theme: 'modern',
		content: "Deseja realmente deletar este agendamento.",
		closeIcon: true,
		buttons: {
			yes: {
				text: 'Apagar',
				btnClass: 'btn btn-danger',
				action: function () {
					$.post(`${base_url}contato/apagar/`, { id : id} ).done(window.location.reload());				}
			},
			no: {
				text: 'Cancelar',
				action: function () {
					$.alert({
						title: 'Cancelado!',
						theme: 'modern',
						content: "Agendamento não apagado!"
					})
				}
			},
		}
	});
}

jQuery(document).ready(function($) {

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	} );

	jQuery('.selectpicker').selectpicker;


	$('#menuToggle').on('click', function(event) {
		$('body').toggleClass('open');
	});

	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

	// $('.user-area> a').on('click', function(event) {
	// 	event.preventDefault();
	// 	event.stopPropagation();
	// 	$('.user-menu').parent().removeClass('open');
	// 	$('.user-menu').parent().toggleClass('open');
	// });

	$('input[type="file"]').change(function () {
		var nome_arquivo = $(this).val().split("\\").pop();

		//$(this).parent().html('<i class="fa fa-image" style="margin-right: 5px;"></i> '+nome_arquivo);
		//$(this).next().html('<i class="fa fa-image" style="margin-right: 5px;"></i> '+nome_arquivo);[

		this.nextElementSibling.innerHTML = '<i class="fa fa-image" style="margin-right: 5px;"></i> '+nome_arquivo;
	});

});